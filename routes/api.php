<?php

use App\Models\Order;
use App\Models\Send;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use neto737\BitGoSDK\BitGoExpress;
use neto737\BitGoSDK\BitGoSDK;
use neto737\BitGoSDK\Enum\CurrencyCode;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/', function () {
    return  get_wallet_address($currency="TLTC");
});



Route::get('webhook', function (Request $request) {
  if($request->post()){
      $raw_payload = file_get_contents('php://input');
      $payload = json_decode($raw_payload, true);
      // wallet funded by customer
      if (is_array($payload['type'] == "receive")) {
          $bitgo = new BitGoSDK(getenv("BITGO_API_KEY_HERE"), strtolower($payload['coin']), getenv("BITGO_SANDBOX"));
          $walletAddress  = $payload['outputs'][1]->address;
          $walletAmount   = $bitgo->toBtc($payload['outputs'][1]->value);
          if($payload['state'] == "confirmed") {
              // transaction is successfully received in wallet so give value.
              $order = Order::where(["send_address" => $walletAddress, "order_status" => "pending"])->first();
              if ($order->send_amount >= $walletAmount) {
                  // full payment received -- send coin to customer
                  $send = transfer_crypto($order->receive_address, $order->receive_amount, $order->to_currency);
                  // log history of sent coins to customers
                  Send::create([
                    "address"   =>  $order->receive_address,
                    "amount"    =>  $order->receive_amount,
                    "currency"  =>  $order->to_currency,
                    "raw_data"  =>  $send
                  ]);

                  $order->order_status = "completed";
                  $order->order_left = 0;
                  $order->save();
              } else {
                  // half payment received
                  // what should happen? process the half or wait for balance?
              }
          }
      }

      return http_response_code(200);
  }
});



Route::get('ses', function () {
  $hostname = 'localhost';
  $port = 3080;
  $coin = 'tbtc';

  $bitgo = new BitGoSDK('YOUR_API_KEY_HERE', $coin, true);

  /**
   * To send any transaction with BitGoExpress SDK you need to unlock your wallet
   * If you're not using testnet to send coins, you need to unlock your wallet with
   * your OTP password (2FA)
   */
  //$bitgo->unlockSession('0000000');

  $bitgoExpress = new BitGoExpress($hostname, $port, $coin);
  $bitgoExpress->accessToken = getenv('BITGO_API_KEY_HERE');
  $bitgoExpress->walletId = getenv("BITGO_WALLET_ID_HERE");

  /**
   * Send the amount in satoshi
   */
  $value_in_btc = 0.0001;
  $amount = BitGoSDK::toSatoshi($value_in_btc);
  

  $sendTransaction = $bitgoExpress->sendTransaction('mv4rnyY3Su5gjcDNzbMLKBQkBicCtHUtFB', $amount, getenv('BITGO_WALLET_PASSPHRASE'));
  return response()->json($sendTransaction);
});


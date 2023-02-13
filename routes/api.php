<?php

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


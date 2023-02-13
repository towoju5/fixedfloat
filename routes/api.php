<?php

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use neto737\BitGoSDK\BitGoSDK;

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

Route::get('webhook', function (Request $request) {
    if($request->post()){
        $raw_payload = file_get_contents('php://input');
        $payload = json_decode($raw_payload, true);
        // wallet funded by customer
        if (is_array($payload['type'] == "receive")) {
            $bitgo = new BitGoSDK(getenv("BITGO_API_KEY_HERE"), $payload['coin'], getenv("BITGO_SANDBOX"));
            $walletAddress  = $payload['outputs'][1]->address;
            $walletAmount   = $bitgo->toBtc($payload['outputs'][1]->value);
            if($payload['state'] == "confirmed") {
                // transaction is successfully received in wallet so give value.
                $order = Order::where(["send_address" => $walletAddress, "order_status" => "pending"])->first();
                if ($order->send_amount >= $walletAmount) {
                    // full payment received
                    // send coin to customer
                    $send = transfer_crypto($order->receive_address, $order->receive_amount, $order->to_currency);
                    // log history of sent coins to customers
                } else {
                    // half payment received
                    // what should happen? process the half or wait for balance?
                }
            }
        }
    }
});
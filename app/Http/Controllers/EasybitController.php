<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EasybitController extends Controller
{
    public $url;

    public function __construct()
    {
        $this->url = "https://api.easybit.com";
    }

    public function setFee(Request $request, $data)
    {
        $this->validate($request, [
            'extraFee' => 'required'
        ]);

        $endpoint = "setExtraFee";
        $method = "POST";
        $data['extraFee'] = $request->extraFee;
        self::process($endpoint, $method, $data);
    }

    public function pairInfo(Request $request)
    {
        $this->validate($request, [
            'send'          => 'required',
            'receive'       => 'required',
            'sendNetwork'   => 'required',
            'receiveNetwork'=> 'required'
        ]);

        $data['send']           = $request->send;
        $data['receive']        = $request->receive;
        $data['sendNetwork']    = $request->sendNetwork;
        $data['receiveNetwork'] = $request->receiveNetwork;
        $endpoint = "pairInfo";
        $method = "GET";
        self::process($endpoint, $method, $data);
    }

    public function currencyList(Request $request)
    {
        $endpoint = "currencyList";
        $method = "GET";
        $data['currency'] = $request->extraFee ?? null;
        self::process($endpoint, $method, $data);
    }

    public function rate(Request $request)
    {
        $endpoint = "rate";
        $method = "GET";
        $data = [
            'send'          =>  $request->send,
            'receive'       =>  $request->receive,
            'amount'        =>  $request->amount,
            'amountType'    =>  $request->type ?? "send",
            'sendNetwork'   =>  $request->fromCurrency,
            'receiveNetwork'=>  $request->tourrency,
        ];

        self::process($endpoint, $method, $data);
    }

    public function validateAddress(Request $request)
    {
        $endpoint = "validateAddress";
        $method = "GET";
        $data = [
            'currency'  =>  $request->currency,
            'address'   =>  $request->address,
            'network'   =>  $request->network
        ];

        self::process($endpoint, $method, $data);
    }

    public function order(Request $request)
    {
        $endpoint = "order";
        $method = "POST";
        $data = [
            'send'              =>  $request->send,
            'receive'           =>  $request->receive,
            'amount'            =>  $request->amount,
            'receiveAddress'    =>  $request->receiveAddress,
            'sendNetwork'       =>  $request->sendNetwork,
            'receiveNetwork'    =>  $request->sendNetwork,
        ];

        self::process($endpoint, $method, $data);
    }


    public function orderStatus(Request $request)
    {
        $endpoint = "orderStatus";
        $method = "GET";
        $data = [
            'id'  =>  $request->orderId
        ];

        self::process($endpoint, $method, $data);
    }


    /**
     * Process all API request.
     */
    private function process($endpoint, $method, $data)
    {
        $request = Http::withToken(getenv("EASYBIT_TOKE"))->$method($endpoint, $data);
        return $request;
    }
}

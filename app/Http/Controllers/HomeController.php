<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Towoju5\Fixedfloat\Fixedfloat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->float = app('fixedfloat');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect(route('users.dashboard'));
    }
    
    public function exchangePrice(Request $request)
    {
        $toCurrency = $request->toCurrency;
        $fromCurrency = $request->fromCurrency;
        if(!$request->has('fromQty')){
            $fromQty = getExchangeVal($fromCurrency, $toCurrency);
            $request->merge([
                'fromQty' => 0.00921795
            ]);
        }
        $data = [
            'quoteId'     => _getTransactionId(),
            'fromAsset'   => $request->fromCurrency,
            'toAsset'     => $request->toCurrency,
            'fromAmount'  => $request->fromQty,
        ];

        $test = getExchangeVal($fromCurrency, $toCurrency);
        $cal = $test * $request->fromQty;
        $decode = ajaxEchangePrice([], [], $cal);
        return response()->json($decode);
    }

    public function exchangeAddressInfo(Request $request)
    {
        $pro = new Fixedfloat();
        $data = [
            'currency'  => $request->currency,
            'address'   => $request->address
        ];
        $result = $pro->exchangeAddressInfo($data);
        return response()->json($result);

        // sample response is as below
        // [
        //     'valid' => true,
        //     'amount' => NULL,
        //     'result_address' => '0x71C7656EC7ab88b098defB751B7401B5f6d8976F',
        //     'valid_address' => true,
        // ]
    }

    public function language($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }

        if(App::setLocale($lang)){
            session()->put('locale', $lang);
            Toastr::success('Language changed successfully');
        }
        return back();
    }
}
<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
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
        $this->float = app('fixedfloat');
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


    // public function exchangePrice(Request $request)
    // {
    //     if(getenv('TRADEMODE') == 'fixedfloat'){            
    //         $pro = new Fixedfloat();
    //         $data = [
    //             'fromCurrency' => $request->fromCurrency,
    //             'toCurrency' => $request->toCurrency,
    //             'fromQty' => $request->fromQty,
    //             'type' => $request->type
    //         ];
    //         $price = $pro->getPrice($data);
    //         return response()->json($price);
    //     } elseif(getenv('TRADEMODE') == 'binance') {
    //         $pro = app('binance');
    //         $data = [
    //             'fromAsset'         => 'BTC',          //$request->fromCurrency,
    //             'toAsset'           => 'ETH',          //$request->toCurrency,
    //             'fromAmount'        => '5',          //$request->fromQty,
    //             // 'type' => $request->type
    //         ];
    //         // $decode = ajaxEchangePrice($data);

    //         $result = $pro->getConvertRate($data);
    //        return ($result);
    //     }
    // }
    
    public function exchangePrice(Request $request)
    {
        if(getenv('TRADEMODE') == 'fixedfloat'){            
            $pro = new Fixedfloat();
            $data = [
                'fromCurrency' => $request->fromCurrency,
                'toCurrency' => $request->toCurrency,
                'fromQty' => $request->fromQty,
                'type' => $request->type
            ];
            $price = $pro->getPrice($data);
            return response()->json($price);
        } elseif(getenv('TRADEMODE') == 'binance') {
            $pro = app('binance');
            $data = [
                'quoteId'     => _getTransactionId(),
                'fromAsset'   => $request->fromCurrency,
                'toAsset'     => $request->toCurrency,
                'fromAmount'  => $request->fromQty,
                'validTime'   => '2m'
            ];

            $main   = $pro->getConvertRate($data);
            $result = $pro->getConvertgetQuote($data);
            $decode = ajaxEchangePrice($result, $main);
            // return response()->json([$result, $main]);
            return response()->json($decode);
        //    return ($decode);
        }
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BinanceController extends Controller
{
    public function __construct()
    {
        $this->bin = app('binance');
    }

    /**
     * Get all available coin tickers from Binance
     */
    public function balance()
    {
        $bin = $this->bin->getBalances();
        return $bin;
    }

    /**
     * Get all available coin tickers from Binance
     * @param string subAccountString
     */
    public function sub_account()
    {
        $data = ['subAccountString'  =>  'ogenwa'];
        $bin = $this->bin->createSubAccount($data);
        return $bin;
    }

    /**
     * Get all available coin tickers from Binance
     */
    public function ticker()
    {
        $bin = $this->bin->getTickers();
        return $bin;
    }

    /**
     * check if the passed coins are available as ticker
     */
    public function checkticker(Request $request)
    {
        $from   = "BNB";
        $to     = "BTC";
        $sym    = "$from$to";
        $bin    = $this->bin->getTicker($sym);
        $find   = result($bin);
        $amount = $request->amount ?? 0;
        $search = searchInArray($find, $sym);
        if ($search) :
            $result = $this->openTrade($sym, $amount, "SELL");
        else :
            if ($this->openTrade($from . "BUSD", $amount)) :
                $result = $this->openFinalTrade($sym, $amount);
            endif;
        endif;
        return $result;
    }

    /**
     * @action sell from and buy BUSD
     * @param ticker ==> ETHBTC
     * @param amount ==> 0.0005
     * @param action BUY OR SELL
     */
    private function openTrade($ticker, $amount)
    {
        $type = 'MARKET';
        $action = "SELL";
        $result = $this->bin->trade($ticker, $amount, $action, $type, $price = false);
        return response()->json(result($result), 200);
    }

    /**
     * @action sell BUSD and to final
     * @param ticker ==> ETHBTC
     * @param amount ==> 0.0005
     * @param action BUY OR SELL
     */
    private function openFinalTrade($ticker, $amount)
    {
        $type = 'MARKET';
        $action = "BUY";
        $result = $this->bin->trade($ticker, $amount, $action, $type);
        return response()->json(result($result), 200);
    }
}

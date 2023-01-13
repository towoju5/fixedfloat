<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KuCoin\SDK\Auth;
use KuCoin\SDK\Exceptions\BusinessException;
use KuCoin\SDK\Exceptions\HttpException;
use KuCoin\SDK\KuCoinApi;
use KuCoin\SDK\PrivateApi\Account;
use KuCoin\SDK\PrivateApi\Deposit;
use KuCoin\SDK\PublicApi\Currency;
use KuCoin\SDK\PublicApi\Symbol;

class KucoinController extends Controller
{
    public function index()
    {
        KuCoinApi::setDebugMode(true);
        KuCoinApi::setBaseUri(getenv('KUCOIN_BASE_URL'));
        $key = getenv('KUCOIN_API_KEY');
        $secret = getenv('KUCOIN_API_SECRET');
        $passphrase = "Adedayo201@";

        // Auth version v2 (recommend)
        $auth = new Auth($key, $secret, $passphrase, Auth::API_KEY_VERSION_V2);
        // Auth version v1
        // $auth = new Auth('key', 'secret', 'passphrase');

        $api = new Account($auth);
        // $api = new Symbol();
        // $api = new Currency();
        // [PROCESSING, SUCCESS, and FAILURE]
        // $api = new Deposit();

        try {
            // $result = $api->getList();
            // $result = $api->getList();
            // $result = $api->createAddress('BTC');
            // $result = $api->getDeposits([
            //     'currency'  =>  'USD',
            //     'status'    =>  'PROCESSING'
            // ]);
            $result = $api->create('main', 'BTC');
            return response()->json($result);
        } catch (HttpException $e) {
            return response()->json($e->getMessage());
        } catch (BusinessException $e) {
            return response()->json($e->getMessage());
        }




        // $kucoin = kucoin();
        // $account = new Account();
        // return $account->create('sub', 'BTC');
        // $auth = new Auth($key, $secret, $passphrase);
        // $api = new Account($auth);

        // try {
        //     $result = $api->getList(['type' => 'main']);
        //     var_dump($result);
        // } catch (HttpException $e) {
        //     var_dump($e->getMessage());
        // } catch (BusinessException $e) {
        //     var_dump($e->getMessage());
        // }
    }
}

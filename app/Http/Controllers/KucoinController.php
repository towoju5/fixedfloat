<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KuCoin\SDK\Auth;
use KuCoin\SDK\Exceptions\BusinessException;
use KuCoin\SDK\Exceptions\HttpException;
use KuCoin\SDK\KuCoinApi;
use KuCoin\SDK\PrivateApi\Account;

class KucoinController extends Controller
{
    public function index()
    {
        KuCoinApi::setDebugMode(true);
        KuCoinApi::setBaseUri('https://openapi-sandbox.kucoin.com');
        $key = getenv('key'); 
        $secret = getenv('secret'); 
        $passphrase = "Adedayo201@";
        // $kucoin = kucoin();
        // $account = new Account();
        // return $account->create('sub', 'BTC');
        $auth = new Auth($key, $secret, $passphrase);
        $api = new Account($auth);

        try {
            $result = $api->getList(['type' => 'main']);
            var_dump($result);
        } catch (HttpException $e) {
            var_dump($e->getMessage());
        } catch (BusinessException $e) {
            var_dump($e->getMessage());
        }
    }
}

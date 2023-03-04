<?php

namespace App\Http\Controllers;

use App\Models\CoinWallet;
use Illuminate\Http\Request;

class CoinWalletController extends Controller
{
    public function list()
    {
        $wallets = CoinWallet::all();
        return view("admin.coins", compact("wallets"));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'coin'  =>  'required',
            'wallet'=>   'required'
        ]);

        if (CoinWallet::create([
            'coin'  =>  $request->coin,
            "wallet_id" =>  $request->wallet
        ])) {
            return back()->with("success", "Wallet ID added successfully");
        } else {
            return back()->with("error", "Unable to add wallet details");
        }
    }

    public function delete($id)
    {
        $wallet = CoinWallet::find($id);
        if($wallet){
            $wallet->delete();
            return back()->with("success", "Wallet data deleted successfully");
        }
        return back()->with("error", "Unable to delete wallet data");
    }
}

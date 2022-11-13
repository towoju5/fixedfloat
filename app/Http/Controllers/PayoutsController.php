<?php

namespace App\Http\Controllers;

use App\Models\Payouts;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class PayoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payouts = Payouts::with('user', 'orders')->orderBy('created_at', 'DESC');
        if($request->ajax())
        {
            return DataTables::eloquent($payouts)
                ->addColumn('paid_status', function ($data) {
                    return status_code($data->paid_status);
                })
                ->addColumn('customer', function ($data) {
                    return $data->user->name;
                })
                ->addColumn('profit', function ($data) {
                    return "BTC $data->profit";
                })
                ->editColumn('date', function ($data) {
                    return show_datetime($data->created_at);
                })
                ->make(true);
        }
        return view('admin.payouts.index', compact('payouts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $payouts = Payouts::where('user_id', auth()->id())->paginate(15);
        return view('users.trans.payout', compact('payouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'amount'            =>  'required|min:0.001',
            'wallet_address'    =>  'required|min:35'
        ]);
        // store withdrawal request and debit user balance
        $user = User::find(auth()->id());
        $payout = Payouts::create([
            'user_id'   =>    $user->id,
            'amount'    =>  $user->btc_balance,
            'status'    =>  0,
            'wallet_address'    =>  $request->wallet_address,
        ]);
        $user->btc_balance = 0;
        $user->save();

        return redirect()->back()->with('success', "Withdrawal request received successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

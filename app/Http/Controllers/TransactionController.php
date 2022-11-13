<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->id();
        $active = [0,1];
        $actives = Order::whereUserId($user)->whereIn('order_status', $active)->orderBy('created_at', 'DESC');
        $lists = Order::whereUserId($user)->whereNotIn('order_status', $active)->orderBy('created_at', 'DESC');

        if($request->ajax() && $request->type == 'actives')
        {
            return DataTables::eloquent($actives)
                ->addColumn('date', function ($data) {
                    return date('F j, Y g:i A', strtotime($data->order_reg));
                })
                ->addColumn('send', function ($data) {
                    return "$data->from_currency $data->send_amount";
                })
                ->addColumn('receive', function ($data) {
                    return "$data->to_currency  $data->receive_amount";
                })
                ->editColumn('order_status', function ($data) {
                    return status_code($data->order_status);
                })
                ->editColumn('date', function ($data) {
                    return show_datetime($data->created_at);
                })
                ->make(true);
        }

        if($request->ajax() && $request->type == 'list')
        {
            return DataTables::eloquent($lists)
                ->addColumn('order_id', function ($data) {
                    return $data->order_id;
                })
                ->addColumn('send_amount', function ($data) {
                    return "$data->from_currency $data->send_amount";
                })
                ->addColumn('receives', function ($data) {
                    return "$data->to_currency $data->receive_amount";
                })
                ->addColumn('receive_address', function ($data) {
                     return $data->receive_address;
                })
                ->addColumn('date', function ($data) {
                    return show_datetime($data->created_at);
                })
                ->make(true);
        }

        return view('users.trans.index');
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
        //
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

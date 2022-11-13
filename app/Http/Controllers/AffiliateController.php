<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\AffiliateProfit;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): void
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): void
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
    public function update(Request $request, $id): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): void
    {
        //
    }

    public function affiliate(Request $request)
    {
        $user = auth()->id();
        $query = User::where('referred_by', $user)->where('id', '!=', $user)->pluck('id');
        $getOrders = AffiliateProfit::with(['orders'])->whereIn('user_id', $query)->orderBy('created_at', 'DESC');
        // return $getOrders;
        // return DataTables::eloquent($getOrders)->make(true);
        if($request->ajax())
        {
            return DataTables::eloquent($getOrders)
                ->addColumn('paid_status', function ($data) {
                    return status_code($data->paid_status);
                })
                // ->addColumn('orders', function ($data) {
                //     return $data->orders->order_id;
                // })
                ->editColumn('date', function ($data) {
                    return date('F j, Y g:i A', strtotime($data->created_at));
                })
                ->make(true);
        }
        return view('users.affiliate.index');
    }

    public function list(Request $request)
    {
        // if($request->ajax())
        // {
        //     return Datatables::eloquent(Department::join('users', 'users.id', '=', 'departments.created_by')->select('departments.*', 'users.name as created_user'))->make(true);
        // }
        // $exam_level_types = ExamLevelType::get();
        // return view('users.affiliate.list', compact('lists'));
    }
}

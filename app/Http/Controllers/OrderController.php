<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->float = app('fixedfloat');
    }

    /**
     * Admin Controllers methods
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $getOrders = Order::with(['user'])->orderBy('created_at', 'DESC');
        // Datatables::eloquent($getOrders)->make(true);
        if($request->ajax())
        {
            return DataTables::eloquent($getOrders)
                ->addColumn('paid_status', function ($data) {
                    return status_code($data->paid_status);
                })
                ->addColumn('customer', function ($data) {
                    return $data->user->name;
                })
                ->addColumn('date', function ($data) {
                    return date('F j, Y g:i A', strtotime($data->order_reg));
                })
                ->addColumn('send', function ($data) {
                    return "$data->from_currency $data->send_amount";
                })
                ->addColumn('receive', function ($data) {
                    return "$data->to_currency  $data->receive_amount";
                })
                ->editColumn('date', function ($data) {
                    return show_datetime($data->created_at);
                })
                ->make(true);
        }
        return view('admin.orders.index');
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
        return $orders = Order::all();
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



    /**
     * User Controllers method starts here
     */


    public function createOrder(Request $request)
    {
        $this->validate($request, [
            "fromCurrency"  =>  "required",
            "toCurrency"    =>  "required",
            "toAddress"     =>  "required",
            "type"          =>  "required",
            "fromQty"       =>  "required",
        ]);

        $pro = $this->float;
        $data = [
            "fromCurrency"  =>  $request->fromCurrency,
            "toCurrency"    =>  $request->toCurrency,
            "toAddress"     =>  $request->toAddress,
            "fromQty"       =>  $request->fromQty,
            "toQty"         =>  $this->charges($request->fromQty),
            "type"          =>  $request->type,
        ];
        $response = $pro->createOrder($data);
        // \Log::info($response);
        if ($response['code'] != 0 OR strtolower($response['msg']) != 'ok') {
            return get_error_response($response);
        }
        $data = $response['data'];
        $saveOrder = save_order($data);
        return $response;
        echo json_encode([
            $saveOrder->order_id
        ]); exit;
        return response()->json([
            'code' => 0,
            'msg' => 'OK',
            'data' => [
              'id' => $saveOrder->order_id
            ]
        ], 200);
    }

    public function getOrder(Request $request, $id)
    {
        $pro = $this->float;
        $order= Order::where('order_id', $id)->first();
        // $data = [
        //     'id'    => $order->order_id,
        //     'token' => $order->order_token
        // ];
        // $response = $pro->getOrder($data);
        // return $response;
        return view('order', compact('order'));
    }

    public function getPrice(Request $request)
    {
        $pro = $this->float;
        $data = [
            "fromCurrency"  =>  "BTC",
            "toCurrency"    =>  "ETH",
            "fromQty"   =>  "1",
            // "type"  =>  "xoxo",
        ];
        $response = $pro->getPrice($data);
        return $response;
    }

    /**
     * Calculate the attractable charges for this transaction.
     * @return toQty as float
     */
    public function charges($fromQty) : float
    {
        $getCharges = get_commission($fromQty);
        $toQty = $fromQty - $getCharges;
        return floatval($toQty);
    }

    public function cron()
    {
        $pro = $this->float;
        $orders = Order::where('status', 0)->get();
        foreach ($orders as $key => $order) {
            $data = [
                'id'    => $order->order_id,
                'token' => $order->order_token
            ];
            $response = $pro->getOrder($data);
            $this->process_status($response, $order->id);
        }
    }

    private function process_status($data, $id)
    {
        $order = Order::find($id);
        $order->status = $data['status'];
        $order->save();
    }
}

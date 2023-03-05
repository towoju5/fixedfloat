<?php

namespace App\Http\Controllers;

use App\Models\Order;
use CryptoQr\BitcoinQr;
use CryptoQr\CryptoQr;
use CryptoQr\EthereumQr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use neto737\BitGoSDK\BitGoSDK;
use neto737\BitGoSDK\Enum\CurrencyCode;

class OrderController extends Controller
{
    public function __construct()
    {
        // $this->float = app('fixedfloat');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $getOrders = Order::with(['user'])->orderBy('created_at', 'DESC');
        // Datatables::eloquent($getOrders)->make(true);
        if ($request->ajax()) {
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
        $order = Order::findorFail($id);
        $order->payment_hash = $request->payment_hash;
        if ($order->save()) :
            return redirect()->back()->with('success', 'Payment hash updated successfully');
        else :
            return redirect()->back()->with('error', 'Payment hash update failed');
        endif;
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
        $validator = Validator::make($request->all(), [
            "amount"            =>  "required",
            "send"              =>  "required",
            "sendNetwork"       =>  "required",
            "receiveNetwork"    =>  "required",
            "receive"           =>  "required",
            "payload"           =>  "required",
            "receiveAddress"    =>  "required",
        ]);
    
        if ($validator->fails()) {
            // return Redirect::back()->withErrors($validator);
            return response()->json($validator->errors());
        }

        $data = [
            'amount'            =>  $request->amount,
            'send'              =>  $request->send,
            'sendNetwork'       =>  $request->sendNetwork,
            'receiveNetwork'    =>  $request->receiveNetwork,
            'receive'           =>  $request->receive,
            'payload'           =>  $request->payload,
            'receiveAddress'    =>  $request->receiveAddress,
        ];
        
        $get_wallet_address = get_wallet_address($data);
        // return response()->json($get_wallet_address);

        if($get_wallet_address['success'] != 1){
            return back()->with("error", $get_wallet_address['errorMessage']);
        }

        $response = $get_wallet_address['data'];
        
        if($request->receive == "BTC"){
            $data['qr_code'] = new BitcoinQr($response['sendAddress']);
        } elseif($request->receive == "ETH"){
            $data['qr_code'] = new EthereumQr($response['sendAddress']);
        } else {
            $data['qr_code'] = new CryptoQr($response['sendAddress']);
        }

        $data['receive_amount']  = $response['receiveAmount'];
        $data['receive_address'] = $response['receiveAddress'];
        $data['send_address']    = $response['sendAddress'];
        $data['payment_data']    = $response;
        
        $saveOrder = save_order($response);
        
        return redirect(route("order", $saveOrder->order_id));

    }

    public function getOrder(Request $request, $id)
    {
        $order = Order::where('order_id', $id)->with('user')->first();
        return view('order', compact('order'));
    }

    public function getPrice(Request $request)
    {
        // $data = [
        //     "fromCurrency"  =>  "BTC",
        //     "toCurrency"    =>  "ETH",
        //     "fromQty"   =>  "1",
        //     // "type"  =>  "xoxo",
        // ];
        // $response = $pro->getPrice($data);
        // return $response;
    }

    /**
     * Calculate the attractable charges for this transaction.
     * @return toQty as float
     */
    public function charges($receive_amount): float
    {
        $getCharges = get_commission($receive_amount);
        $toQty = $receive_amount - $getCharges;
        return floatval($toQty);
    }

    public function cron()
    {
        // $pro = $this->float;
        // $orders = Order::where('status', 0)->get();
        // foreach ($orders as $key => $order) {
        //     $data = [
        //         'id'    => $order->order_id,
        //         'token' => $order->order_token
        //     ];
        //     $response = $pro->getOrder($data);
        //     $this->process_status($response, $order->id);
        // }
    }

    private function process_status($data, $id)
    {
        $order = Order::find($id);
        $order->status = $data['status'];
        $order->save();
    }
}

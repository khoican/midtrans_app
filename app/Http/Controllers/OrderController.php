<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\DetailOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('pages.history', compact('orders'));
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'total' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_qty' => 'required',
            'cart_id' => 'required'
        ]);

        $order = DB::transaction(function () use ($request) {
            $order = Order::create([
                'product_id' => $request->product_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'total' => $request->total,
                'status' => 'pending',
            ]);

            $order->detail_orders()->create([
                'product_name' => $request->product_name,
                'product_price' => $request->product_price,
                'product_qty' => $request->product_qty,
            ]);
            return $order;
        });

        $cart = Cart::find($request->cart_id);
        $cart->delete();

        return redirect('order-detail/'.$order->id);
    }

    public function detail (Request $request, $id) {
        $order = Order::find($id);
        $detail = DetailOrder::where('order_id', $id)->first();

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total,
            ),
            'customer_details' => array(
                'first_name' => $order->name,
                'email' => $order->email,
                'phone' => $order->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('pages.detailOrder', compact('order', 'detail', 'snapToken'));
    }
}
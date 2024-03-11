<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::lates();

        return view('order', compact('orders'));
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
        ]);

        Order::create([
            'product_id' => $request->product_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'total' => $request->total,
            'status' => 'pending',
        ]);

        DetailOrder::create([
            'order_id' => Order::latest()->first()->id,
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_qty' => $request->product_qty,
        ]);

        return redirect('order')->with('success', 'Produk Berhasil Ditambahkan ke Keranjang');
    }
}
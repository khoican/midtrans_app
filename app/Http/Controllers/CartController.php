<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();

        return view('cart', compact('carts'));
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        Cart::create($request->all());

        return redirect('cart')->with('success', 'Produk Berhasil Ditambahkan ke Keranjang');
    }
}
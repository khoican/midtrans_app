<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();

        return view('pages.cart', compact('carts'));
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required'
        ]);

        Cart::create([
            'products_id' => $request->product_id
        ]);

        return redirect('cart')->with('success', 'Produk Berhasil Ditambahkan ke Keranjang');
    }

    public function checkout ($id) {
        $cart = Cart::where('products_id', $id)->first();

        return view('pages.checkout', compact('cart'));
    }
}
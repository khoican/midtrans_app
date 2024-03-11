<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.home', compact('products'));
    }

    public function detail ($id) {
        $product = Product::find($id);

        return view('pages.detailProduct', compact('product'));
    }
}
@extends('layouts.index')

@section('content')

<div class="container pt-3">
    <div class="text-center">
        <h1>Keranjang Saya</h1>
    </div>

    <div class="d-flex justify-content-center gap-3 text-info">
        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
        <a class="nav-link" href="{{ route('history') }}">Riwayat Belanja</a>
    </div>

    <div class="d-flex justify-content-center gap-3 mt-5">
        @forelse ($carts as $cart)
        <div class="card" style="width: 18rem;">
            <img src="{{ $cart->product->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{ route('detail.product', $cart->product->id) }}" class="nav-link fs-5 fw-bold card-title">{{
                    $cart->product->name
                    }}</a>
                <p class="card-text text-danger fw-semibold">Rp.{{number_format($cart->product->price)}}</p>
                <a href="{{ route('checkout',$cart->product->id)}}" class="btn btn-primary w-100">Checkout</a>
            </div>

        </div>
        @empty
        <div class="alert alert-danger" role="alert">
            Keranjang Kosong
        </div>
        @endforelse
    </div>
</div>

@endsection

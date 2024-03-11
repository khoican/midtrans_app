@extends('layouts.index')

@section('content')

<div class="container pt-3">
    <div class="text-center">
        <h1>Selamat Datang di Rullstudio</h1>
        <p>Silahkan jelajahi semua produk kami. Jika berminat, checkout sekarang</p>
    </div>

    <div class="d-flex justify-content-center gap-3 text-info">
        <a class="nav-link" href="{{ route('cart') }}">Keranjang Saya</a>
        <a class="nav-link" href="{{ route('history') }}">Riwayat Belanja</a>
    </div>

    <div class="d-flex justify-content-center gap-3 mt-5">
        @foreach ($products as $product)
        <div class="card" style="width: 18rem;">
            <img src="{{ $product->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{ route('detail.product', $product->id) }}" class="nav-link fs-5 fw-bold card-title">{{
                    $product->name
                    }}</a>
                <p class="card-text text-danger fw-semibold">Rp.{{number_format($product->price)}}</p>

                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}" hidden">
                    <button type="submit" class="btn btn-primary w-100">Tambah Keranjang</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

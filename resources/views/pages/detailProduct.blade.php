@extends('layouts.index')

@section('content')

<div class="container">
    <div class="d-flex row mt-4">
        <div class="col-8">
            <img src="{{ $product->image }}" class="w-100" alt="">
            <div class="mt-3">
                <div>
                    <h4>{{ $product->name }}</h4>
                    <p class="text-danger fw-semibold fs-5">Rp.{{ number_format($product->price) }}</p>
                </div>

                <p class="mt-3">{{ $product->description }}</p>
            </div>
        </div>
        <div class=" col-4 position-relative">
            <div class="position-sticky" style="top: 2rem">
                <p>Simpan produk ini dalam keranjangmu dan checkout kemudian</p>
                <form action="">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}" hidden">
                    <button type="submit" class="btn btn-primary w-100">Tambah Keranjang</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

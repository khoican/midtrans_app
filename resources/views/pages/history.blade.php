@extends('layouts.index')

@section('content')

<div class="container pt-3">
    <div class="text-center">
        <h1>Riwayat Belanja</h1>
    </div>

    <div class="d-flex justify-content-center gap-3 text-info">
        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
        <a class="nav-link" href="{{ route('cart') }}">Keranjang Saya</a>
    </div>

    <table class="table table-hover mt-5">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Produk</th>
                <th scope="col">Status Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
            <tr class="text-center">
                <th scope="row">{{ $loop->iteration }}</th>
                <td class="text-start">{{ $order->name }}</td>
                <td>{{ $order->detail_orders->first()->product_name }}</td>
                <td class="text-capitalize">
                    @if ($order->status == 'pending')
                    <p class="btn btn-danger">Belum Bayar</p>
                    @elseif ($order->status == 'success')
                    <p class="btn btn-success">Sudah Bayar</p>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Tidak ada riwayat belanja</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection

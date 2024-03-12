@extends('layouts.index')

@section('content')

<div class="container pt-3">
    <div class="text-center">
        <h1>Detail Transaksi</h1>
    </div>

    <div class="mt-5 mb-5 d-flex gap-3">
        <div class="col-md-6 ">
            <div class="card w-100 h-100">
                <div class="card-body">
                    <p>Produk yang anda beli</p>
                    <h5 class="fs-5 fw-bold card-title">{{ $order->detail_orders->first()->product_name }}</h5>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">Jumlah : {{ $order->detail_orders->first()->product_qty }}</p>
                        <p class="card-text text-danger fw-semibold">Rp.{{number_format($order->total)}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="card w-100 h-100">
                <div class="card-body">
                    <p>Data diri anda</p>
                    <h5 class="fs-5 fw-bold card-title">{{ $order->name }}</h5>
                    <p class="card-text">Email : {{ $order->email }}</p>
                    <p class="card-text">No. HP : {{ $order->phone }}</p>
                    <p class="card-text">Alamat : {{ $order->address }}</p>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary w-25" id="pay-button">Bayar Sekarang</button>
</div>

<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
        window.snap.pay('{{ $snapToken }}');
    });
</script>

@endsection

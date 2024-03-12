@extends('layouts.index')

@section('content')

<div class="container pt-3">
    <div class="text-center">
        <h1>Checkout</h1>
    </div>

    <div class="mt-5 mb-5">
        <form action="{{ route('checkout.store')}}" method="POST">
            @csrf
            <div class="card mb-3 w-100">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="{{ $cart->product->image }}" class="img-fluid rounded-start h-100" alt="...">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cart->product->name }}</h5>
                            <p class="card-text text-danger fw-semibold">Rp.{{number_format($cart->product->price)}}</p>

                            <div class="d-flex justify-content-between">
                                <input type="number" class="form-control w-25" id="qty" name="product_qty"
                                    placeholder="Jumlah" value="1">

                                <h5 class="card-title" id="total">Rp.{{ $cart->product->price }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h5 class="mb-3">Lengkapi Data Berikut Sebelum Checkout</h5>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon / HP</label>
                    <input type="phone" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Alamat Lengkap</label>
                    <textarea name="address" id="address" class="form-control" rows="5"></textarea>
                </div>

                <input type="hidden" name="product_id" value="{{ $cart->product->id }}">
                <input type="hidden" name="product_name" value="{{ $cart->product->name }}">
                <input type="hidden" name="product_price" value="{{ $cart->product->price }}">
                <input type="hidden" id="total_price" name="total" value="{{ $cart->product->price }}">

                <input type="hidden" name="cart_id" value="{{ $cart->id }}">

                <button type="submit" class="btn btn-primary w-25" id="pay-button">Checkout</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function getTotalPrice() {
        const qty = document.getElementById('qty');
        const total = document.getElementById('total');
        const total_price = document.getElementById('total_price');
        qty.addEventListener('input', function () {
            let set_total_price = qty.value * {{ $cart->product->price }}
            total.innerText = 'Rp.' + set_total_price
            total_price.value = set_total_price
        })
    }

    getTotalPrice()
</script>

@endsection

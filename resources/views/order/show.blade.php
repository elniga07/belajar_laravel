@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Data Pengguna') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('order.show', $order->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Product</label>
    <input type="text" class="form-control" id="id_product" value="{{$order->id_product}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="quantity" value="{{$order->quantity}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Order Date</label>
    <input type="date" class="form-control" id="order_date" value="{{$order->order_date}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Customer</label>
    <input type="text" class="form-control" id="id_customer" value="{{$order->id_customer}}" disabled>
  </div>
<br>
    <a type="submit" class="btn btn-primary" href="{{ route('order.index')}}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

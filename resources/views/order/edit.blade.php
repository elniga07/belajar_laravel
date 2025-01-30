@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Edit Order') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
  <select class="form-select form-select-sm" aria-label="Small select example" name="id_product">
  <option selected>ID product</option>
  @foreach($product as $data)
  <option value="{{$data->id}}">{{$data->nama_product}}</option>
  @endforeach
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Quantity</label>
    <input type="text" class="form-control" name="quantity" value="{{$order->quantity}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Order Date</label>
    <input type="date" class="form-control" name="order_date" value="{{$order->order_date}}">
  </div>
  <div class="mb-3">
  <select class="form-select form-select-sm" aria-label="Small select example" name="id_customer">
  <option selected>ID customer</option>
  @foreach($customer as $data)
  <option value="{{$data->id}}">{{$data->nama_customer}}</option>
  @endforeach
</select>
  </div>
<br>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

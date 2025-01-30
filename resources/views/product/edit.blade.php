@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-success text-white"><h2>{{ __('Edit product') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('product.update', $product->id) }}" method="POST" >
                        @csrf
                        @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Name product</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" value="{{$product->nama_product}}" name="nama_product">
                    <br>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$product->merk}}" name="merk">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$product->price}}" name="price">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" value="{{$product->stock}}" name="stock">
                  </div>
                      <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

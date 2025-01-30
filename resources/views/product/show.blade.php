@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Data Product') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('product.show', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="nama_product" value="{{$product->nama_product}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Merk</label>
    <input type="text" class="form-control" id="merk" value="{{$product->merk}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" value="{{$product->price}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stock</label>
    <input type="number" class="form-control" id="stock" value="{{$product->stock}}" disabled>
  </div>
<br>
    <a type="submit" class="btn btn-primary" href="{{ route('product.index')}}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

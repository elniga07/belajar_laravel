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
                    <form action="{{ route('produk.show', $produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="nama_produk" value="{{$produk->nama_produk}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="harga" value="{{$produk->harga}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stock</label>
    <input type="number" class="form-control" id="stock" value="{{$produk->stock}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Kategori</label>
    <input type="text" class="form-control" id="id_kategori" value="{{$produk->id_kategori}}" disabled>
  </div>
  <div class="mb-3">
  <label>Image</label>
  <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
</div>
<br>
    <a type="submit" class="btn btn-primary" href="{{ route('produk.index')}}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

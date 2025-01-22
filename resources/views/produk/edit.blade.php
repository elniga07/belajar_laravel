@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Edit Pengguna') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="text" class="form-control" name="harga">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stock</label>
    <input type="number" class="form-control" name="stock">
  </div>
  <div class="mb-3">
  <select class="form-select form-select-sm" aria-label="Small select example" name="id_kategori">
  <option selected>ID Kategori</option>
  @foreach($kategori as $data)
  <option value="{{$data->id}}" {{ $data->id == $produk->id_kategori ? 'selected' : '' }}>{{$data->nama_kategori}}</option>
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

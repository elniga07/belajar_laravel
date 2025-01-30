@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Data Buku') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('buku.show', $buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama buku</label>
    <input type="text" class="form-control" id="nama_buku" value="{{$buku->nama_buku}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="harga" value="{{$buku->harga}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stock</label>
    <input type="number" class="form-control" id="stock" value="{{$buku->stock}}" disabled>
  </div>
  <div class="mb-3">
  <label>Image</label>
  <img src="{{ asset('/images/buku/' . $buku->cover) }}" width="100">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Penerbit</label>
    <input type="text" class="form-control" id="id_penerbit" value="{{$buku->id_penerbit}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Terbit</label>
    <input type="date" class="form-control" name="tanggal_terbit" value="{{$buku->tanggal_terbit}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Genre</label>
    <input type="text" class="form-control" id="id_genre" value="{{$buku->id_genre}}" disabled>
  </div>
<br>
    <a type="submit" class="btn btn-primary" href="{{ route('buku.index')}}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

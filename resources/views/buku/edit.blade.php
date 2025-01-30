@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Edit Buku') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama buku</label>
    <input type="text" class="form-control" name="nama_buku" value="{{$buku->nama_buku}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="text" class="form-control" name="harga" value="{{$buku->harga}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stock</label>
    <input type="number" class="form-control" name="stock" value="{{$buku->stock}}">
  </div>
  <div class="mb-3">
  <label>Image</label>
  <img src="{{ asset('/images/buku/' . $buku->cover) }}" width="100">
  <input type="file" class="form-control" name="cover" required>
</div>
<div class="mb-3">
  <select class="form-select form-select-sm" aria-label="Small select example" name="id_penerbit">
  <option selected>ID Penerbit</option>
  @foreach($penerbit as $data)
  <option value="{{$data->id}}" {{ $data->id == $buku->id_penerbit ? 'selected' : '' }}>{{$data->nama_penerbit}}</option>
  @endforeach
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Terbit</label>
    <input type="date" class="form-control" name="tanggal_terbit" value="{{$buku->tanggal_terbit}}">
  </div>
  <div class="mb-3">
  <select class="form-select form-select-sm" aria-label="Small select example" name="id_genre">
  <option selected>ID Genre</option>
  @foreach($genre as $data)
  <option value="{{$data->id}}" {{ $data->id == $buku->id_genre ? 'selected' : '' }}>{{$data->genre}}</option>
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

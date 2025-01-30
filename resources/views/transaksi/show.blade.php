@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Data Transaksi') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('transaksi.show', $transaksi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">jumlah</label>
    <input type="number" class="form-control" id="jumlah" value="{{$transaksi->jumlah}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Transaksi</label>
    <input type="date" class="form-control" name="tanggal_transaksi" value="{{$transaksi->tanggal_transaksi}}" disabled>
  </div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID buku</label>
    <input type="text" class="form-control" id="id_buku" value="{{$transaksi->id_buku}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID pembeli</label>
    <input type="text" class="form-control" id="id_pembeli" value="{{$transaksi->id_pembeli}}" disabled>
  </div>
<br>
    <a type="submit" class="btn btn-primary" href="{{ route('transaksi.index')}}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

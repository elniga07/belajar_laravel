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
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">jumlah</label>
    <input type="number" class="form-control" name="jumlah">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Transaksi</label>
    <input type="date" class="form-control" name="tanggal_transaksi">
  </div>
  <div class="mb-3">
  </div>
  <select class="form-select form-select-sm" aria-label="Small select example" name="id_buku">
  <option selected>ID Buku</option>
  @foreach($buku as $data)
  <option value="{{$data->id}}">{{$data->nama_buku}}</option>
  @endforeach
</select>
<select class="form-select form-select-sm" aria-label="Small select example" name="id_pembeli">
  <option selected>ID Pembeli</option>
  @foreach($pembeli as $data)
  <option value="{{$data->id}}">{{$data->nama_pembeli}}</option>
  @endforeach
</select>
<br>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                    <form action="{{ route('telepon.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nomor</label>
    <input type="text" class="form-control" name="nomor">
  </div>
  <div class="mb-3">
  <select class="form-select form-select-sm" aria-label="Small select example" name="id_pengguna">
  <option selected>ID Pengguna</option>
  @foreach($telepon2 as $data)
  <option value="{{$data->id}}">{{$data->nama}}</option>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Data pembeli') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('pembeli.show', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name Pembeli</label>
    <input type="text" class="form-control" id="nama_pembeli" value="{{$pembeli->nama_pembeli}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="merk" value="{{$pembeli->jenis_kelamin}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telpon</label>
    <input type="text" class="form-control" id="price" value="{{$pembeli->telpon}}" disabled>
  </div>
<br>
    <a type="submit" class="btn btn-primary" href="{{ route('pembeli.index')}}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

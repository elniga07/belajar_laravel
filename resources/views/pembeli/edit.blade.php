@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-success text-white"><h2>{{ __('Edit Pembeli') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST" >
                        @csrf
                        @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Name Pembeli</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" value="{{$pembeli->nama_pembeli}}" name="nama_pembeli">
                    <br>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                  <input class="form-check-input" type="radio" id="exampleInputPassword1" value="{{$pembeli->jenis_kelamin}}" name="jenis_kelamin">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Boy
                  </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="exampleInputPassword1" value="{{$pembeli->jenis_kelamin}}" name="jenis_kelamin">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Girl
                    </label>
                  </div>
                    </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Telpon</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$pembeli->telpon}}" name="telpon">
                  </div>
                      <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

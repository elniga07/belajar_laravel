@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Data Penerbit') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('penerbit.show', $penerbit->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="nama_penerbit" value="{{$penerbit->nama_penerbit}}" disabled>
  </div>
<br>
    <a type="submit" class="btn btn-primary" href="{{ route('penerbit.index')}}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

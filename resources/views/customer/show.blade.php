@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Data Customer') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('customer.show', $customer->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name Customer</label>
    <input type="text" class="form-control" id="nama_customer" value="{{$customer->nama_customer}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">gender</label>
    <input type="text" class="form-control" id="merk" value="{{$customer->gender}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact</label>
    <input type="text" class="form-control" id="price" value="{{$customer->contact}}" disabled>
  </div>
<br>
    <a type="submit" class="btn btn-primary" href="{{ route('customer.index')}}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Customer') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name customer</label>
    <input type="text" class="form-control" name="nama_customer">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <div class="form-check">
  <input class="form-check-input" type="radio"   value="boy" name="gender">
  <label class="form-check-label" for="flexRadioDefault1">
    Boy
  </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" value="girl" name="gender">
    <label class="form-check-label" for="flexRadioDefault2">
      Girl
    </label>
  </div>
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact</label>
    <input type="text" class="form-control" name="contact">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Save</button>
  <a class="btn btn-secondary" href="{{ route('customer.index') }}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

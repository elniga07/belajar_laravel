@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Genre') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('genre.store') }}" method="post" enctype="multipart/form-data">
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
    <label for="exampleInputPassword1" class="form-label">Genre</label>
    <input type="text" class="form-control" name="genre">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Save</button>
  <a class="btn btn-secondary" href="{{ route('genre.index') }}">Back</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

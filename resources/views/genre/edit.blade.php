@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-success text-white"><h2>{{ __('Edit Genre') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('genre.update', $genre->id) }}" method="POST" >
                        @csrf
                        @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Genre</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" value="{{$genre->genre}}" name="genre">
                  </div>
                      <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

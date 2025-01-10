@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-warning"><h2>{{ __('Data Siswa') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('siswa.show', $siswa->id) }}" method="POST" >
                        @csrf
                        @method('PUT')
                    <div class="mb-3">
                      <label for="nis" class="form-label">NIS</label>
                      <input type="number" class="form-control" id="nis" value="{{$siswa->nis}}" disabled>
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" value="{{$siswa->nama}}" disabled>
                    </div>
                     <div class="mb-3">
                      <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                      <input type="text" class="form-control" id="jenis_kelamin" value="{{$siswa->jenis_kelamin}}" disabled>
                     </div>
                      <div class="mb-3">
                      <label for="kelas" class="form-label">Kelas</label>
                      <input type="text" class="form-control" id="kelas" value="{{$siswa->kelas}}" disabled>
                    </div>
                    <br>
                      <a type="submit" class="btn btn-warning" href="{{ route('siswa.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

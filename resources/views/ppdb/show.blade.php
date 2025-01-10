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
                    <form action="{{ route('ppdb.show', $ppdb->id) }}" method="POST" >
                        @csrf
                        @method('PUT')
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" value="{{$ppdb->nama_lengkap}}" disabled>
                    </div>
                     <div class="mb-3">
                      <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                      <input type="text" class="form-control" id="jenis_kelamin" value="{{$ppdb->jenis_kelamin}}" disabled>
                     </div>
                     <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Agama</label>
    <input type="text" class="form-control" name="agama" value="{{$ppdb->agama}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="{{$ppdb->alamat}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telpon</label>
    <input type="number" class="form-control" name="telpon" value="{{$ppdb->telpon}}" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Asal Sekolah</label>
    <input type="text" class="form-control" name="asal_sekolah" value="{{$ppdb->asal_sekolah}}" disabled>
  </div>
                    <br>
                      <a type="submit" class="btn btn-warning" href="{{ route('ppdb.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

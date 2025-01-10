@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow ">
                <div class="card-header bg-primary text-white"><h2>{{ __('Data Siswa') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('ppdb.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama_lengkap">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
    <div class="form-check">
  <input class="form-check-input" type="radio"   value="Laki-Laki" name="jenis_kelamin">
  <label class="form-check-label" for="flexRadioDefault1">
    Laki-Laki
  </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin">
    <label class="form-check-label" for="flexRadioDefault2">
      Perempuan
    </label>
  </div>
    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Agama</label>
    <input type="text" class="form-control" name="agama">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telpon</label>
    <input type="number" class="form-control" name="telpon">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Asal Sekolah</label>
    <input type="text" class="form-control" name="asal_sekolah">
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

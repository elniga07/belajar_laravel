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
                    <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIS</label>
    <input type="number" class="form-control" name="nis">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
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
  <select class="form-select form-select-sm" aria-label="Small select example" name="kelas">
  <option selected>Kelas</option>
  <option value="XI RPL 1">XI RPL 1</option>
  <option value="XI RPL 2">XI RPL 2</option>
  <option value="XI RPL 3">XI RPL 3</option>
</select>
<div class="mb-3">
    <label>Image</label>
    <input type="file" class="form-control" name="cover">
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

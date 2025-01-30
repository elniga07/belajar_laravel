@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data Siswa') }}</h2></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-lable="close"></button>
                        </div>
                    @endif
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIS</th>
      <th scope="col">NAMA</th>
      <th scope="col">JENIS KELAMIN</th>
      <th scope="col">KELAS</th>
      <th scope="col">IMAGE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1;@endphp
    @foreach ($siswa as $data)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$data->nis}}</td>
      <td>{{$data->nama}}</td>
      <td>{{$data->jenis_kelamin}}</td>
      <td>{{$data->kelas}}</td>
      <td>
        <img src="{{ asset('/images/siswa/' . $data->cover) }}" width="100">
      </td>
      <td>
        <a class="btn btn-success" href="{{ route('siswa.edit', $data->id)}}">Edit</a>
        <a class="btn btn-warning" href="{{ route('siswa.show', $data->id)}}">Show</a>
        
        <form action="{{ route('siswa.destroy', $data->id)}}" method="POST" style="display:inline">
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclide="retrun confirm('Apakah Anda Yakin?')">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a class="btn btn-primary" href="{{ route('siswa.create') }}"><b>+</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

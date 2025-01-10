@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data PPDB') }}</h2></div>

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
                          <th scope="col">NAMA</th>
                          <th scope="col">JENIS KELAMIN</th>
                          <th scope="col">AGAMA</th>
                          <th scope="col">ALAMAT</th>
                          <th scope="col">TELPON</th>
                          <th scope="col">ASAL SEKOLAH</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1;@endphp
                         @foreach ($ppdb as $data)
                         <tr>
                           <th scope="row">{{$no++}}</th>
                           <td>{{$data->nama_lengkap}}</td>
                           <td>{{$data->jenis_kelamin}}</td>
                           <td>{{$data->agama}}</td>
                           <td>{{$data->alamat}}</td>
                           <td>{{$data->telpon}}</td>
                           <td>{{$data->asal_sekolah}}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('ppdb.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{ route('ppdb.show', $data->id)}}">Show</a>
        
                            <form action="{{ route('ppdb.destroy', $data->id)}}" method="POST" style="display:inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclide="retrun confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                        </td>
                        </tr>
                           @endforeach
                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('ppdb.create') }}"><b>+</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

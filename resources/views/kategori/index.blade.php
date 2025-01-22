@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data Kategori') }}</h2></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-lable="close"></button>
                        </div>
                    @endif
                    <table class="table ">
                    <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">NAMA_KATEGORI</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1;@endphp
                         @foreach ($kategori as $data)
                         <tr>
                           <th scope="row">{{$no++}}</th>
                           <td>{{$data->nama_kategori}}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('kategori.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{ route('kategori.show', $data->id)}}">Show</a>
        
                            <form action="{{ route('kategori.destroy', $data->id)}}" method="POST" style="display:inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="retrun confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                        </td>
                        </tr>
                           @endforeach
                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('kategori.create') }}"><b>+</b></a>
                    <a class="btn btn-secondary" href="{{ route('produk.index') }}"><b>Lihat Produk</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

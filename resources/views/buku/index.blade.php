@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data Buku') }}</h2></div>

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
                          <th scope="col">NAMA BUKU</th>
                          <th scope="col">HARGA</th>
                          <th scope="col">STOCK</th>
                          <th scope="col">IMAGE</th>
                          <th scope="col">ID Penerbit</th>
                          <th scope="col">TANGGAL Terbit</th>
                          <th scope="col">ID Genre</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1;@endphp
                         @foreach ($buku as $data)
                         <tr>
                           <th scope="row">{{$no++}}</th>
                           <td>{{$data->nama_buku}}</td>
                           <td>{{$data->harga}}</td>
                           <td>{{$data->stock}}</td>
                           <td>
                                <img src="{{ asset('/images/buku/' . $data->cover) }}" width="100">
                           </td>
                           <td>{{$data->penerbit->nama_penerbit}}</td>
                           <td>{{$data->tanggal_terbit}}</td>
                           <td>{{$data->genre->genre}}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('buku.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{ route('buku.show', $data->id)}}">Show</a>
        
                            <form action="{{ route('buku.destroy', $data->id)}}" method="POST" style="display:inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="retrun confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                        </td>
                        </tr>
                           @endforeach
                    </tbody> 
                    </table>
                    <a class="btn btn-primary" href="{{ route('buku.create') }}"><b>+</b></a>
                    <a class="btn btn-secondary" href="{{ route('penerbit.index') }}"><b>+ Penerbit</b></a>
                    <a class="btn btn-secondary" href="{{ route('genre.index') }}"><b>+ Genre</b></a>
                    <a class="btn btn-secondary" href="{{ route('transaksi.index') }}"><b>Transaksi</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

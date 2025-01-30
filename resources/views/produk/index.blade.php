@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data Produk') }}</h2></div>

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
                          <th scope="col">NAMA PRODUK</th>
                          <th scope="col">HARGA</th>
                          <th scope="col">STOCK</th>
                          <th scope="col">ID Kategori</th>
                          <th scope="col">IMAGE</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1;@endphp
                         @foreach ($produk as $data)
                         <tr>
                           <th scope="row">{{$no++}}</th>
                           <td>{{$data->nama_produk}}</td>
                           <td>{{$data->harga}}</td>
                           <td>{{$data->stock}}</td>
                           <td>{{$data->kategori->nama_kategori}}</td>
                           <td>
                                <img src="{{ asset('/images/produk/' . $data->cover) }}" width="100">
                           </td>
                           <td>
                            <a class="btn btn-success" href="{{ route('produk.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{ route('produk.show', $data->id)}}">Show</a>
        
                            <form action="{{ route('produk.destroy', $data->id)}}" method="POST" style="display:inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="retrun confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                        </td>
                        </tr>
                           @endforeach
                    </tbody> 
                    </table>
                    <a class="btn btn-primary" href="{{ route('produk.create') }}"><b>+</b></a>
                    <a class="btn btn-secondary" href="{{ route('kategori.index') }}"><b>+ Kategori</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

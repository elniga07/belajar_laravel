@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data Transaksi') }}</h2></div>

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
                          <th scope="col">JUMLAH</th>
                          <th scope="col">TANGGAL TRANSAKSI</th>
                          <th scope="col">ID Buku</th>
                          <th scope="col">ID Pembeli</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1;@endphp
                         @foreach ($transaksi as $data)
                         <tr>
                           <th scope="row">{{$no++}}</th>
                           <td>{{$data->jumlah}}</td>
                           <td>{{$data->tanggal_transaksi}}</td>
                           <td>{{$data->buku->nama_buku}}</td>
                           <td>{{$data->pembeli->nama_pembeli}}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('transaksi.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{ route('transaksi.show', $data->id)}}">Show</a>
        
                            <form action="{{ route('transaksi.destroy', $data->id)}}" method="POST" style="display:inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="retrun confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                        </td>
                        </tr>
                           @endforeach
                    </tbody> 
                    </table>
                    <a class="btn btn-primary" href="{{ route('transaksi.create') }}"><b>+</b></a>
                    <a class="btn btn-secondary" href="{{ route('buku.index') }}"><b>+ Buku</b></a>
                    <a class="btn btn-secondary" href="{{ route('pembeli.index') }}"><b>+ Pembeli</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data Pembeli') }}</h2></div>

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
                          <th scope="col">NAMA PEMBELI</th>
                          <th scope="col">JENIS KELAMIN</th>
                          <th scope="col">TELPON</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1;@endphp
                         @foreach ($pembeli as $data)
                         <tr>
                           <th scope="row">{{$no++}}</th>
                           <td>{{$data->nama_pembeli}}</td>
                           <td>{{$data->jenis_kelamin}}</td>
                           <td>{{$data->telpon}}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('pembeli.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{ route('pembeli.show', $data->id)}}">Show</a>
        
                            <form action="{{ route('pembeli.destroy', $data->id)}}" method="POST" style="display:inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="retrun confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                        </td>
                        </tr>
                           @endforeach
                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('pembeli.create') }}"><b>+</b></a>
                    <a class="btn btn-secondary" href="{{ route('transaksi.index') }}"><b>Transaksi</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

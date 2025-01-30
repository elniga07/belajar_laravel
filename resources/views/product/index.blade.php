@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data Product') }}</h2></div>

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
                          <th scope="col">NAME_PRODUCT</th>
                          <th scope="col">MERK</th>
                          <th scope="col">PRICE</th>
                          <th scope="col">STOCK</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1;@endphp
                         @foreach ($product as $data)
                         <tr>
                           <th scope="row">{{$no++}}</th>
                           <td>{{$data->nama_product}}</td>
                           <td>{{$data->merk}}</td>
                           <td>{{$data->price}}</td>
                           <td>{{$data->stock}}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('product.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{ route('product.show', $data->id)}}">Show</a>
        
                            <form action="{{ route('product.destroy', $data->id)}}" method="POST" style="display:inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="retrun confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                        </td>
                        </tr>
                           @endforeach
                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('product.create') }}"><b>+</b></a>
                    <a class="btn btn-secondary" href="{{ route('order.index') }}"><b>Order</b></a>
                    <a class="btn btn-secondary" href="{{ route('customer.index') }}"><b>Customer</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

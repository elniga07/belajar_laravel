@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header"><h2>{{ __('Data Customer') }}</h2></div>

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
                          <th scope="col">NAME_CUSTOMER</th>
                          <th scope="col">GENDER</th>
                          <th scope="col">CONTACT</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1;@endphp
                         @foreach ($customer as $data)
                         <tr>
                           <th scope="row">{{$no++}}</th>
                           <td>{{$data->nama_customer}}</td>
                           <td>{{$data->gender}}</td>
                           <td>{{$data->contact}}</td>
                           <td>
                            <a class="btn btn-success" href="{{ route('customer.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{ route('customer.show', $data->id)}}">Show</a>
        
                            <form action="{{ route('customer.destroy', $data->id)}}" method="POST" style="display:inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="retrun confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                        </td>
                        </tr>
                           @endforeach
                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('customer.create') }}"><b>+</b></a>
                    <a class="btn btn-secondary" href="{{ route('order.index') }}"><b>Order</b></a>
                    <a class="btn btn-secondary" href="{{ route('product.index') }}"><b>Product</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

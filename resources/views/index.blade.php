@extends('welcome')

@section('content')
    <div class="pt-5">
        <div class="row position-relative">
            <h1 class="text-center"><strong>PRODUCTS</strong></h1>
            <a href={{ route('functions/createProduct') }}>
                <button class="btn btn-md btn-primary px-4 float-end">Add new product</button>
            </a>
        </div>
        @if (session('success'))
            <div class="mb-3 alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('success-delete'))
            <div class="mb-3 alert alert-danger" role="alert">
                {{ session('success-delete') }}
            </div>
        @endif
        <div class="overflow-auto">
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($products) > 0)
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href={{ route('functions/showProduct', $product->id) }} class="btn btn-primary">View</a>
                                        {{-- <a href={{ route('functions/edit', $product->id) }} class="btn btn-light">Edit</a> --}}
                                        {{-- <form action={{ route('destroy', $product->id) }} method="POST">
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                        </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">
                                No product available
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

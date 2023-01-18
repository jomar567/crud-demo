@extends('welcome')

@section('content')
    <div class="pt-5">
        <div class="row position-relative">
            <h1 class="text-center"><strong>PRODUCTS</strong></h1>
            <a href={{ route('functions/createProduct') }}>
                <button class="btn btn-md btn-primary px-4 float-end mb-3">Add new product</button>
            </a>
        </div>
        @if (session('success'))
            <div class="my-3 alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('success-delete'))
            <div class="my-3 alert alert-danger" role="alert">
                {{ session('success-delete') }}
            </div>
        @endif
        <div class="overflow-auto">
            <table class="table table-light table-striped shadow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @if(isset($products) > 0)
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td class="d-flex flex-row gap-2 justify-content-center align-items-center">
                                    <a href={{ route('functions/showProduct', $product->id) }} class="btn btn-info text-white">View</a>
                                    <a href={{ route('functions/editProduct', $product->id) }} class="btn btn-primary">Edit</a>
                                    <form action={{ route('destroy', $product->id) }} method="POST" class="d-inline-block">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
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

@extends('welcome')

@section('content')
<div class="vh-100">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="card_wrapper w-75">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <h1>
                    Create Product
                </h1>
                <div>
                    <a href={{ route('index') }} class="btn btn-info">Go Back</a>
                </div>
            </div>
            <div>
                <div class="card shadow">
                    <div class="card-body">
                        <form action={{ route('addNewProduct') }} method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    Product Name
                                </label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">
                                    Product Description
                                </label>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">
                                    Product Price
                                </label>
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">
                                    Product Quantity
                                </label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

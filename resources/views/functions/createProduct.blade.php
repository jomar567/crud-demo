@extends('welcome')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Create Product
            </h1>
            <div>
                <a href={{ route('index') }} class="btn btn-light">Go Back</a>
            </div>
        </div>
        <div>
            <div class="card text-black">
                <div class="card-body">
                    <form action={{ route('addNewProduct') }} method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Name
                            </label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                Description
                            </label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">
                                Price
                            </label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">
                                Quantity
                            </label>
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

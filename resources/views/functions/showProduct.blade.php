@extends('welcome')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Product Details
            </h1>
            <div>
                <a href={{ route('index') }} class="btn btn-light">Go Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 w-50 m-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h1>
                            Name: {{ $product->name }}
                        </h1>
                        <h2>
                            Description: {{ $product->description }}
                        </h2>
                        <h3>
                            Price: {{ $product->price }}
                        </h3>
                        <h4>
                            Quantity: {{ $product->quantity }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

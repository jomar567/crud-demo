<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Product CRUD Laravel</title>
</head>
<body>
    <div class="container p-5">
        <div class="row position-relative">
            <h1 class="text-center"><strong>PRODUCTS</strong></h1>
            <a href="/newProductForm" class="mt-5">
                <button class="btn btn-md btn-primary px-4 float-end">Add new product</button>
            </a>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-reponsive">
                    <table class="table table-striped shadow rounded">
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
                                    <td>
                                        {{ $product->id }}
                                    </td>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        {{ $product->description }}
                                    </td>
                                    <td>
                                        {{ $product->price }}
                                    </td>
                                    <td>
                                        {{ $product->quantity }}
                                    </td>
                                    <td>
                                        <a href='/viewProduct?id={{ $product->id }}' style="text-decoration: none;">
                                            <button class="btn btn-info text-white mb-2">VIEW</button>
                                        </a>
                                        <a href='/updateProduct?id={{ $product->id }}' style="text-decoration: none;">
                                            <button class="btn bg-primary text-white mb-2">EDIT</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="4" class="text-center">No products yet.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

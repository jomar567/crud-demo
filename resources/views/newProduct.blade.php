<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <div class="container vh-100">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="card_wrapper w-75">
                <div class="card shadow p-3">
                    <div class="card-body">
                        <form method="POST" action="/addNewProduct">
                        @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Product Description</label>
                                <input type="text" name="description" class="form-control" id="description">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Product Price</label>
                                <input type="number" name="price" class="form-control" id="price">
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Product Quantity</label>
                                <input type="number" name="quantity" class="form-control" id="quantity">
                            </div>
                            <button type="submit" class="mt-4 btn btn-primary d-block m-auto">Create New Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

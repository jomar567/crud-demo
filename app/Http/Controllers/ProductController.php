<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return view('index')->with('products', Product::orderByDesc('created_at')->get());
    }

    //Create New Product Form
    public function create() {
        return view('functions/createProduct');
    }
    //Create New Product
    public function store(Request $request) {

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('index')->with('success', 'New product added!');
    }

    public function show(Request $request)
    {
        $product = Product::find($request->id);

        return view('functions/showProduct')->with('product', $product);
    }

    public function edit(Request $request)
    {
        $product = Product::find($request->id);

        return view('functions/editProduct')->with('product', $product);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('index')->with('success', 'Product ' . $request->name . ' has been updated');
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->delete();

        return redirect()->route('index')->with('success-delete', 'Product has been deleted');
    }
}

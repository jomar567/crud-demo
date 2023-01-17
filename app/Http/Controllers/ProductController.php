<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return view('welcome')->with('products', Product::orderByDesc('created_at')->get());
    }

    //Create New Product Form
    public function create() {
        return view('newProduct');
    }
    //Create New Product
    public function store(Request $request) {

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('welcome')->with('success', 'New product added!');
    }

    //View Product
    public function view() {
        return view('newProduct');
    }
}

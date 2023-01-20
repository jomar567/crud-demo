<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/createProduct', [ProductController::class, 'create'])->name('functions/createProduct');
Route::post('/addNewProduct', [ProductController::class, 'store'])->name('addNewProduct');
Route::get('/viewProduct/{id}', [ProductController::class, 'show'])->name('functions/showProduct');
Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('functions/editProduct');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::post('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');


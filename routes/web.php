<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController AS ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('welcome');
Route::get('/newProductForm', [ProductController::class, 'create'])->name('create');
Route::post('/addNewProduct', [ProductController::class, 'store']);
Route::post('/viewProduct', [ProductController::class, 'view'])->name('view');

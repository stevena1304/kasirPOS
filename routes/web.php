<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::resource('products', ProductController::class);
Route::get('/products/{products}/hapus', [ProductController::class, 'hapus'])->name('products.hapus');
Route::resource('category', CategoryController::class);
Route::get('/category/{category}/hapus', [CategoryController::class, 'hapus'])->name('category.hapus');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CashierController;

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

//logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

//logout khusus jika eror (akses dari ketik url /logout)
// Route::get('logout', [LoginController::class, 'logout'])->middleware('auth');

Route::middleware('guest')->group(function () {
    Route::resource('register', RegisterController::class);
    Route::get('logins', [LoginController::class, 'index'])->name('login');
    Route::post('logins', [LoginController::class, 'authenticate']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::resource('products', ProductController::class);
    Route::get('/products/{products}/hapus', [ProductController::class, 'hapus'])->name('products.hapus');
    Route::resource('category', CategoryController::class);
    Route::get('/category/{category}/hapus', [CategoryController::class, 'hapus'])->name('category.hapus');
    Route::resource('cashier', CashierController::class);
});

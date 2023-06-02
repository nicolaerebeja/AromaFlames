<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DescriptionController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductOptionController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('index');
//Route::get('/product', [HomeProductController::class, 'index'])->name('product');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/product', ProductController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/description', DescriptionController::class);
Route::resource('/customer', CustomerController::class);
Route::resource('/order', OrderController::class);
Route::resource('/product_options', ProductOptionController::class);


Route::get('/categorie-produs/{slug}', [CategoryProductController::class, 'index'])->name('categoryProduct');
Route::get('/produs/{slug}', [HomeProductController::class, 'index'])->name('productView');
Route::view('/cos-de-cumparaturi', 'client.cart')->name('cartView');
Route::view('/finalizare-comanda', 'client.checkout')->name('checkoutView');

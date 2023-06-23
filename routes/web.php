<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DescriptionController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\OrderRequestController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductOptionController;
use App\Http\Controllers\auth\LoginController;
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
Route::get('/categorie-produs/{slug}', [CategoryProductController::class, 'index'])->name('categoryProduct');
Route::get('/produs/{slug}', [HomeProductController::class, 'index'])->name('productView');
Route::view('/cos-de-cumparaturi', 'client.cart')->name('cartView');
Route::view('/finalizare-comanda', 'client.checkout')->name('checkoutView');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/order-request', OrderRequestController::class);

Route::get('/plata-si-livrare', function () { return view('legal/plata-si-livrare'); });
Route::get('/politica-de-retur-produse', function () { return view('legal/politica-de-retur-produse'); });
Route::get('/contact', function () { return view('legal/contact'); });
Route::get('/politica-de-confidentialitate', function () { return view('legal/politica-de-confidentialitate'); });
Route::get('/politica-de-cookies', function () { return view('legal/politica-de-cookies'); });
Route::get('/termeni-si-conditii', function () { return view('legal/termeni-si-conditii'); });



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/product', ProductController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/description', DescriptionController::class);
    Route::resource('/customer', CustomerController::class);
    Route::resource('/order', OrderController::class);
    Route::resource('/product-options', ProductOptionController::class);
    Route::get('/create-from-request/{id}', [OrderController::class, 'createFromRequest'])->name('order.createFromRequest');
});



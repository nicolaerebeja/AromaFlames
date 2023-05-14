<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DescriptionController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\HomeProductController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('index');
//Route::get('/product', [HomeProductController::class, 'index'])->name('product');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/product', ProductController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/description', DescriptionController::class);

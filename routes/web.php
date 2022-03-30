<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ProductController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
  return view('welcome', 'App\Http\Controllers\user\ProductController@search');
});

Route::resource("/product", ProductController::class);
Route::post("user", [ProductController::class, 'addCart'])->name('user.productDetails');
Route::post('search', [ProductController::class, 'search']);

Route::resource("/cart", CartController::class);
Route::get('delete/{id}', [CartController::class, 'removeFromCart']);
Route::get('add/{id}', [CartController::class, 'addQty']);
Route::get('minus/{id}', [CartController::class, 'minusQty']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view("aboutUs", 'user/AboutUs');
Route::view("EmptyCart", 'user/EmptyCart');

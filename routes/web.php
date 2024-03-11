<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'detail'])->name('detail.product');

Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::post('cart/store', [CartController::class, 'store'])->name('cart.store');

Route::get('checkout/{id}', [CartController::class, 'checkout'])->name('checkout');
Route::post('checkout', [OrderController::class, 'store'])->name('checkout.store');

Route::get('history', [OrderController::class, 'index'])->name('history');
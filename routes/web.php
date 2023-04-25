<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/products', [ProductController::class, 'products'])->name('products');

Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/account', [AccountController::class, 'account'])->name('account')->middleware('auth');

Route::get('/favorites', [FavoritesController::class, 'favorites'])->name('favorites');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/', function () {
    return view('welcome');
});

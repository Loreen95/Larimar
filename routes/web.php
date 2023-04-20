<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

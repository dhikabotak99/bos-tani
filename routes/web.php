<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

use App\Http\Controllers\productController;
Route::get('/', [productController::class, 'index']);
Route::get('/product', [productController::class, 'allProduct']);

// Route::post('/orders', [orderController::class, 'formorder']);

use App\Http\Controllers\investasiController;
Route::get('/investasi', [investasiController::class, 'index']);

use App\Http\Controllers\orderController;
Route::get('/order', [orderController::class, 'index']);
Route::get('/order-product/{id}', [orderController::class, 'order']);

// Route::get('/login', [userController::class, 'index']);
Route::get('/login', function () {
        return view('login');
    });

Route::get('/register', function () {
        return view('register');
    });
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

use App\Http\Controllers\userController;
Route::get('/login', [userController::class, 'login']);
Route::get('/register', [userController::class, 'register']);

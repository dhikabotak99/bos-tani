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

// Route::get('/sayur', function () {
//     return view('dashboard-admin/home');
// });

use App\Http\Controllers\productController;
Route::get('/', [productController::class, 'index']);
Route::get('/product', [productController::class, 'allProduct']);

// Route::post('/orders', [orderController::class, 'formorder']);

use App\Http\Controllers\investasiController;
Route::get('/investasi', [investasiController::class, 'index']);

use App\Http\Controllers\orderController;
// Route::get('/order', [orderController::class, 'index']);
Route::get('/order-product/{id}', [orderController::class, 'order']);
Route::get('/postOrder', [orderController::class, 'postOrder']);

use App\Http\Controllers\authController;
Route::get('/login', [authController::class, 'login']);
Route::post('/postLogin', [authController::class, 'postLogin']);
Route::get('/logout', [authController::class, 'logout']);
Route::get('/register', [authController::class, 'register']);
Route::post('/formRegister', [authController::class, 'formRegister']);

use App\Http\Controllers\adminController;
Route::get('/dashboard-admin', [adminController::class, 'index']);
Route::get('/products ', [adminController::class, 'products']);
Route::get('/add-product', [adminController::class, 'addProduct']);
Route::POST('/post-add-product', [adminController::class, 'postAddProduct']);
Route::get('/update-product/{id}', [adminController::class, 'updateProduct']);
Route::POST('/post-update-product/{id}', [adminController::class, 'postUpdateProduct']);
Route::get('/order', [adminController::class, 'order']);
Route::get('/history', [adminController::class, 'history']);
Route::get('/detail-order', [adminController::class, 'detailOrder']);
Route::get('/konfirm/{id}', [adminController::class, 'konfirm']);
Route::get('/delete/{id}', [adminController::class, 'delete']);
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
Route::get('/order-investasi/{id}', [investasiController::class, 'investasi'])->middleware('auth');
Route::get('/postInvestasi', [investasiController::class, 'postInvestasi'])->middleware('auth');
Route::get('/history-investasi', [investasiController::class, 'historyInvestasi'])->middleware('auth');
Route::get('/konfirm-order-investasi/{id}', [investasiController::class, 'konfirmOrderInvestasi']);
Route::get('/delete-order-investasi/{id}', [investasiController::class, 'deleteOrderInvestasi']);

use App\Http\Controllers\orderController;
Route::get('/order-product/{id}', [orderController::class, 'order'])->middleware('auth');
Route::get('/postOrder', [orderController::class, 'postOrder'])->middleware('auth');
Route::get('/history-pembeli', [orderController::class, 'historyPembeli'])->middleware('auth');

use App\Http\Controllers\authController;
Route::get('/login', [authController::class, 'login'])->name('login');
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
    Route::get('/deleteProduct/{id}', [adminController::class, 'deleteProduct']);
    Route::get('/order', [adminController::class, 'order']);
    Route::get('/history', [adminController::class, 'history']);
    Route::get('/detail-order', [adminController::class, 'detailOrder']);
    Route::get('/konfirm/{id}', [adminController::class, 'konfirmOrder']);
    Route::get('/delete/{id}', [adminController::class, 'deleteOrder']);
    Route::get('/investasis ', [adminController::class, 'investasis']);
    Route::get('/add-investasi', [adminController::class, 'addInvestasi']);
    Route::POST('/post-add-investasi', [adminController::class, 'postAddInvestasi']);
    Route::get('/update-investasi/{id}', [adminController::class, 'updateInvestasi']);
    Route::POST('/post-update-investasi/{id}', [adminController::class, 'postUpdateInvestasi']);
    Route::get('/deleteInvestasi/{id}', [adminController::class, 'deleteInvestasi']);
    Route::get('/historyOrderInvestasi', [adminController::class, 'historyOrderInvestasi']);
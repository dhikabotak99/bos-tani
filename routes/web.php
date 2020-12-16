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
// Route::get('/order-product/{id}', [orderController::class, 'order']);
// Route::post('/orders', [orderController::class, 'formorder']);
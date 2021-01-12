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
Route::get('/','ProductController@index')->name('index');
Route::get('home','ProductController@index');
Route::get('order','OrderController@list');
Route::get('history','OrderController@index');
Route::get('addProduct','ProductController@addProduct');
Route::get('product', 'ProductController@list')->name('list');
Route::get('product/delete/{id}','ProductController@destroy');
Route::get('product/edit/{id}','ProductController@edit');
Route::get('product/order/{id}','OrderController@form');
Route::post('product/save','ProductController@store');
Route::post('order/save','OrderController@store');
Route::post('updateproduct/{id}','ProductController@updateproduct');

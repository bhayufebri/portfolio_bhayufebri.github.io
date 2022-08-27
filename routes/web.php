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

Route::get('/', function () {
    return view('home');
});

Route::post('/payment/pay', 'PaymentController@pay')->name('payment.pay');
Route::get('/payment/index', 'PaymentController@index')->name('payment.index');
Route::get('/serpul/index', 'SerpulController@index')->name('serpul.index');
Route::post('/serpul/operator', 'SerpulController@operator')->name('serpul.operator');
Route::post('/serpul/product', 'SerpulController@product')->name('serpul.product');
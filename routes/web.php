<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'Web@index')->name('home');
Route::get('orders', 'HomeController@orders')->name('orders');
Route::get('suppliers', 'HomeController@suppliers')->name('suppliers');
Route::get('/products','HomeController@products')->name('products');
Route::get('tokens','HomeController@tokens')->name('tokens');

Route::post('getTokens', 'HomeController@getTokens')->name('getTokens');

Route::post('products','HomeController@product');

Route::post('supplier', 'HomeController@supplier');
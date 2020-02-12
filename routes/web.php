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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pricecode', 'PriceCodeController@index')->name('pricecode.index');
Route::get('/pricecode/create', 'PriceCodeController@create')->name('pricecode.create');
Route::post('/pricecode', 'PriceCodeController@store')->name('pricecode.store');
Route::get('/pricecode/{priceCode}', 'PriceCodeController@show')->name('pricecode.show');
Route::get('/pricecode/{priceCode}/edit', 'PriceCodeController@edit')->name('pricecode.edit');
Route::patch('/pricecode/{priceCode}', 'PriceCodeController@update')->name('pricecode.update');
//when put and when patch????????????
//Route::put('/pricecode/{pricecode}', 'PriceCodeController@update')->name('pricecode.update');
Route::delete('/pricecode/{priceCode}', 'PriceCodeController@destroy')->name('pricecode.destroy');

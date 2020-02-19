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
Route::get('/test', 'HomeController@test')->name('home.test');

Route::get('/pricecode', 'PriceCodesController@index')->name('pricecode.index');
Route::get('/pricecode/create', 'PriceCodesController@create')->name('pricecode.create');
Route::post('/pricecode', 'PriceCodesController@store')->name('pricecode.store');
Route::get('/pricecode/{priceCode}', 'PriceCodesController@show')->name('pricecode.show');
Route::get('/pricecode/{priceCode}/edit', 'PriceCodesController@edit')->name('pricecode.edit');
Route::patch('/pricecode/{priceCode}', 'PriceCodesController@update')->name('pricecode.update');
//when put and when patch????????????
//Route::put('/pricecode/{pricecode}', 'PriceCodesController@update')->name('pricecode.update');
Route::delete('/pricecode/{priceCode}', 'PriceCodesController@destroy')->name('pricecode.destroy');

Route::get('/movie/{search?}', 'MoviesController@index')->name('movie.index');
Route::get('/movie/create', 'MoviesController@create')->name('movie.create');
Route::post('/movie', 'MoviesController@store')->name('movie.store');
Route::get('/movie/{movie}', 'MoviesController@show')->name('movie.show');
Route::get('/movie/{movie}/edit', 'MoviesController@edit')->name('movie.edit');
Route::patch('/movie/{movie}', 'MoviesController@update')->name('movie.update');
Route::delete('/movie/{movie}', 'MoviesController@destroy')->name('movie.destroy');

Route::get('/tape', 'TapesController@index')->name('tape.index');
Route::get('/tape/create', 'TapesController@create')->name('tape.create')->middleware('can:create-movie');
Route::post('/tape', 'TapesController@store')->name('tape.store');
Route::get('/tape/{tape}', 'TapesController@show')->name('tape.show');
Route::get('/tape/{tape}/edit', 'TapesController@edit')->name('tape.edit');
Route::patch('/tape/{tape}', 'TapesController@update')->name('tape.update');
Route::delete('/tape/{tape}', 'TapesController@destroy')->name('tape.destroy');

Route::get('/stock', 'StocksController@index')->name('stock.index');
Route::get('/stock/create', 'StocksController@create')->name('stock.create');
Route::post('/stock', 'StocksController@store')->name('stock.store');
Route::get('/stock/{stock}', 'StocksController@show')->name('stock.show');
Route::get('/stock/{stock}/edit', 'StocksController@edit')->name('stock.edit');
Route::patch('/stock/{stock}', 'StocksController@update')->name('stock.update');
Route::delete('/stock/{stock}', 'StocksController@destroy')->name('stock.destroy');

Route::get('/rental', 'RentalsController@index')->name('rental.index');
Route::get('/rental/{tape}/create', 'RentalsController@create')->name('rental.create');
Route::post('/rental', 'RentalsController@store')->name('rental.store');
Route::get('/rental/{rental}', 'RentalsController@show')->name('rental.show');
Route::get('/rental/{rental}/edit', 'RentalsController@edit')->name('rental.edit');
Route::patch('/rental/{rental}', 'RentalsController@update')->name('rental.update');
Route::delete('/rental/{rental}', 'RentalsController@destroy')->name('rental.destroy');


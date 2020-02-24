<?php

use Illuminate\Http\Request;
use App\Movie;
use App\Tape;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/movie/{movie}', function(Movie $movie){
    return $movie;
});
Route::get('/tape/{tape}', function(Tape $tape){
    return $tape;
});

Route::get('/movie', function(){
    return App\Movie::all();
});

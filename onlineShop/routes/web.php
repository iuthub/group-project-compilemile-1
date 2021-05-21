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
Route::group([
    'middleware'=>['auth']
], function() {
    Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');

    Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
    Route::get('/basket/place{fullPrice}', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
    Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
    Route::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
});


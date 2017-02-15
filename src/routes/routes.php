<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return 'Здраво пивопије, ође ви је пиво!';
});

// Kada ukucamo beer obraca se kontroleru
Route::resource('beer', 'Nemke\Pivo\App\Http\Controllers\PivoController');
Route::resource('beertype', 'Nemke\Pivo\App\Http\Controllers\BeerTypeController');
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

Route::get('piva', 'Nemke\Pivo\App\Http\Controllers\PivoController@index');
Route::get('piva/single/{id}', 'Nemke\Pivo\App\Http\Controllers\PivoController@single');

// Route::resource('boilerplate', 'Digima\Boilerplate\App\Http\Controllers\BoilerplateController');
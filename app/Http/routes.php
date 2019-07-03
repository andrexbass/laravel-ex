<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas', function () {
    echo "listagem de pessoas";
});

Route::get('/notas', function () {
    echo "lista de notas";
});

Route::get('/compras', function () {
    echo "lista dos registros de compras";
});

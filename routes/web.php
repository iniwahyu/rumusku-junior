<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Luas
Route::get('/luas', 'LuasController@index');
Route::get('/luas/persegi', 'LuasController@luasPersegi');
Route::get('/luas/persegi-panjang', 'LuasController@luasPersegiPanjang');
Route::get('/luas/segitiga', 'LuasController@luasSegitiga');
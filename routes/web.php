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
Route::get('/luas/trapesium', 'LuasController@luasTrapesium');
Route::get('/luas/jajar-genjang', 'LuasController@luasJajarGenjang');
Route::get('/luas/belah-ketupat', 'LuasController@luasBelahKetupat');
Route::get('/luas/layangan', 'LuasController@luasLayangan');
Route::get('/luas/lingkaran', 'LuasController@luasLingkaran');
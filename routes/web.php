<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Homepage
Route::get('/', 'Homepage@index');

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

// Keliling
Route::get('/keliling', 'Keliling@index');
Route::get('/keliling/persegi', 'Keliling@kelilingPersegi');
Route::get('/keliling/persegi-panjang', 'Keliling@kelilingPersegiPanjang');
Route::get('/keliling/segitiga', 'Keliling@kelilingSegitiga');
Route::get('/keliling/trapesium', 'Keliling@kelilingTrapesium');
Route::get('/keliling/jajar-genjang', 'Keliling@kelilingJajarGenjang');
Route::get('/keliling/belah-ketupat', 'Keliling@kelilingBelahKetupat');
Route::get('/keliling/layangan', 'Keliling@kelilingLayangan');
Route::get('/keliling/lingkaran', 'Keliling@kelilingLingkaran');
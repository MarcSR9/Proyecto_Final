<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/offers', function() {
    return view('candidato.offers');
});

Route::get('/offers/numerooferta', function() {
    return view('candidato.templateOffer');
});

Route::get('/profile', function() {
    return view('candidato.profile');
});

Route::get('/help', function() {
    return view('candidato.help');
});



// Rutas de empresa
Route::get('/nuevaEmpresa', 'EmpresasController@nuevaEmpresa')->name('nuevaEmpresa');
Route::post('/nuevaEmpresa', 'EmpresasController@crearEmpresa')->name('crearEmpresa');


Auth::routes();
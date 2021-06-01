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


// Rutas de candidato
Route::get('/nuevoCandidato', 'CandidatosController@nuevoCandidato')->name('nuevoCandidato');
Route::post('/nuevoCandidato', 'CandidatosController@crearCandidato')->name('crearCandidato');

// Rutas de empresa
Route::get('/nuevaEmpresa', 'EmpresasController@nuevaEmpresa')->name('nuevaEmpresa');
Route::post('/nuevaEmpresa', 'EmpresasController@crearEmpresa')->name('crearEmpresa');


Route::group(['middleware' => 'auth'], function(){

	// Rutas de candidato
	Route::get('/perfilCandidato', 'CandidatosController@mostrarCandidato')->name('perfilCandidato');
	// Rutas de empresa
	Route::get('/perfilEmpresa', 'EmpresasController@mostrarEmpresa')->name('perfilEmpresa');
	Route::get('/perfilEmpresa/ofertas', 'EmpresasController@listarOfertas')->name('listarOfertas');
	Route::get('/nuevaOferta', 'EmpresasController@nuevaOferta')->name('nuevaOferta');
	Route::post('/nuevaOferta', 'EmpresasController@publicarOferta')->name('publicarOferta');
});


Auth::routes();
<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'CandidatosController@listarNoticias')->name('home');

// Rutas de candidato
Route::get('/nuevoCandidato', 'CandidatosController@nuevoCandidato')->name('nuevoCandidato');
Route::post('/nuevoCandidato', 'CandidatosController@crearCandidato')->name('crearCandidato');

// Rutas de empresa
Route::get('/nuevaEmpresa', 'EmpresasController@nuevaEmpresa')->name('nuevaEmpresa');
Route::post('/nuevaEmpresa', 'EmpresasController@crearEmpresa')->name('crearEmpresa');


Route::group(['middleware' => 'auth'], function(){

	// Rutas de candidato
	Route::get('/candidato', 'CandidatosController@mostrarCandidato')->name('perfilCandidato');
	Route::get('/candidato/editarDescripcion', 'CandidatosController@editarDescripcion')->name('editarDescripcionCandidato');
	Route::post('/candidato/editarDescripcion', 'CandidatosController@actualizarDescripcion')->name('actualizarDescripcionCandidato');

	// Rutas de oferta
	Route::get('/ofertas', 'CandidatosController@listarOfertas')->name('listarOfertas');
	Route::get('/ofertas/{oferta}', 'CandidatosController@mostrarOferta')->name('verOferta');
	Route::post('/ofertas/{oferta}', 'CandidatosController@inscribirse')->name('inscribirse');

	// Rutas de empresa
	Route::get('/empresa', 'EmpresasController@mostrarEmpresa')->name('perfilEmpresa');
	Route::get('/empresa/editar', 'EmpresasController@editarPerfilEmpresa')->name('editarPerfilEmpresa');
	Route::post('/empresa/editar', 'EmpresasController@actualizarPerfilEmpresa')->name('actualizarPerfilEmpresa');

	Route::get('/empresa/ofertas-publicadas', 'EmpresasController@listarOfertasEmpresa')->name('listarOfertasPublicadas');
	Route::get('/empresa/nuevaOferta', 'EmpresasController@nuevaOferta')->name('nuevaOferta');
	Route::post('/empresa/nuevaOferta', 'EmpresasController@publicarOferta')->name('publicarOferta');

	Route::get('/empresa/noticias', 'EmpresasController@listarNoticiasEmpresa')->name('listarNoticiasPublicadas');
	Route::get('/empresa/nuevaNoticia', 'EmpresasController@nuevaNoticia')->name('nuevaNoticia');
	Route::post('/empresa/nuevaNoticia', 'EmpresasController@publicarNoticia')->name('publicarNoticia');
});


Auth::routes();
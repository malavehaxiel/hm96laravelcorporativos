<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'cors'], function() {

	Route::group(['prefix' => 'auth'], function () {

	    Route::post('login', 'Auth\AuthController@login')->name('login');
	    Route::post('signup', 'Auth\AuthController@signUp');

	    Route::group(['middleware' => 'auth:api'], function() {

	        Route::get('logout', 'Auth\AuthController@logout');
	        Route::get('user', 'Auth\AuthController@user');
	    });
	});


	Route::group(['middleware' => 'auth:api'], function() {
		
		// Corporativos
		Route::resource('corporativos', 'CorporativosController');
		Route::get('corporativos/detalles/{id}', 'CorporativosController@details');

		// Documentos
		Route::resource('documentos', 'DocumentoController');

		// Documentos Corporativos
		Route::resource('documentos-corporativos', 'DocumentoCorporativoController');

		// Contratos Corporativos
		Route::resource('contratos-corporativos', 'ContratoController');

		// Contactos Corporativos
		Route::resource('contactos-corporativos', 'ContactoController');

		// Empresas Corporativos
		Route::resource('empresas-corporativos', 'EmpresaController');
	});
});


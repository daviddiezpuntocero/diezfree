<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {
    Route::auth();
     
	 /**
     * Rutas para la home y crear el menú superior usuarios y/o visitantes
     */
	//Route::get('/index', 'HomeController@index');
	Route::get('/', function () {
    return view('/index');
	});
	Route::get('/index', function () {
    return view('/index');
	});
	/**
     * Utilizando el middleware
     */
	 
	 Route::get('/crear', 'CrearController@categorias');
	 Route::post('/crear', 'CrearController@GrabarProyectos');
     Route::get('/confirmacion', function () {
		return view('/confirmacion');
	});   
    
	
});

	
	
	

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cambiarProcedimiento', function(){


	return view('paciente.cambiarProcedimiento');

});

Route::get('/agendarCita', function(){


	return view('paciente.agendarCita');

});

Route::get('/homeTrabajadorOdontologico', function(){


	return view('trabajadorOdontologico.homeTrabajadorOdontologico');

});

//Route::get('/citas/{fechaInicio}/{fechaFin}/{propietario}', 'CitasController@listarCitas');
//Route::get('/citas/{fecha}/{hora}/{procedimiento}/{paciente}', 'CitasController@agendarCita');
//Route::get('/citas/{idCita}', 'CitasController@cancelarCita');
//Route::get('/citas/{idCita}/{fecha}/{hora}', 'CitasController@reprogramarCita');
//Route::get('/citas/{idCita}/{procedimiento}', 'CitasController@cambiarProcedimiento');

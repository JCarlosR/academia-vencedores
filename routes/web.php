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

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {

	//Alumnos
	Route::get('/alumnos', 'StudentController@index');
	Route::post('/alumnos', 'StudentController@store');

	Route::post('/alumno/editar', 'StudentController@update');

	Route::get('/alumno/{id}/eliminar', 'StudentController@delete');

	//DOCENTES
	Route::get('/docentes', 'TeacherController@index');
	Route::post('/docentes', 'TeacherController@store');

	Route::post('/docente/editar', 'TeacherController@update');

	Route::get('/docente/{id}/eliminar', 'TeacherController@delete');

	//CURSOS
	Route::get('/cursos', 'CourseController@index');
	Route::post('/cursos', 'CourseController@store');

	Route::post('/curso/editar', 'CourseController@update');

	Route::get('/curso/{id}/eliminar', 'CourseController@delete');
	

});


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

	//DOCENTES
	Route::get('/docentes', 'TeacherController@index');

	//CURSOS
	Route::get('/cursos', 'CourseController@index');
	

});


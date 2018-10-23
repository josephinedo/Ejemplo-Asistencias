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

/*
// Usando la funcion get
Route::get('materia/listado', 'MateriaController@index');
Route::get('materia/create', 'MateriaController@create');
Route::post('materia/store', 'MateriaController@store');
Route::get('materia/show/{id}', 'MateriaController@show');
Route::get('materia/edit/{id}', 'MateriaController@edit');
Route::post('materia/update', 'MateriaController@update');
*/

Route::get('materia/reporte-pdf', 'MateriaController@reportePdf');

Route::resource('materia', 'MateriaController');
Route::resource('alumno', 'AlumnoController');
Route::resource('alumno.materia', 'AlumnoMateriaController');
Route::resource('user', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('empleados', 'EmpleadoController');
Route::resource('dependencias', 'DependenciaController');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

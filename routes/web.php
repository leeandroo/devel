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

// RUTAS AUTH
Route::get('/', 'InterfazController@get_landing_page');
Route::get('/login', 'InterfazController@get_login_page');
Route::get('/register', 'InterfazController@get_register_page');
Route::post('/register_new_client', 'Auth\RegisterController@register_new_client')->name('register_client');
Route::post('/register_new_colaborator', 'Auth\RegisterController@register_new_colaborator')->name('register_colaborator');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// RUTAS PROFILE
Route::get('/user-profile', 'InterfazController@get_user_profile');
Route::get('/user-profile/tareas', 'InterfazController@get_tasks');
Route::post('/solicitar-servicio', 'AgendaController@store');
Route::get('/cancelar/{cita}', 'AgendaController@destroy');
Route::post('/agendar/{id}', 'OTController@store');
Route::get('/details/{id}', 'OTController@get_details');
Route::get('/iniciar/{cita}', 'OTController@initialize_job');
Route::post('/agregar/tareas/{cita}', 'OTController@store_activities');
Route::post('/agregar/insumos/{id}', 'OTController@store_supplies');
Route::get('/eliminar/tareas/{ot}', 'OTController@delete_activities');
Route::get('/eliminar/insumos/{ot}', 'OTController@delete_supplies');
Route::post('/finalizar/{cita}', 'OTController@finalize_job');
Route::get('/descargar/{id}', 'OTController@download_ot');
Route::get('/user-profile/mis-citas', 'InterfazController@get_mydate_page');
Route::get('/user-profile/control-citas', 'InterfazController@get_all_dates');
 
// RUTAS INSUMO 
Route::get('/admin-profile/insumo', 'InsumoController@index');
Route::get('/admin-profile/create', 'InsumoController@create');
Route::post('/admin-profile/agregar', 'InsumoController@store');

Route::get('/insumo/{insumo}/editar', 'InsumoController@edit')->middleware('admin');
Route::put('/insumo/{insumo}', 'InsumoController@update')->middleware('admin');
Route::delete('/insumo/{insumo}', 'InsumoController@destroy')->middleware('admin');

// RUTAS CATEGORIA 
Route::get('/dashboard/categoria', 'CategoriaController@index');
Route::get('/pages/categoria', 'CategoriaController@index');
Route::post('/categoria/insertar', 'CategoriaController@store');
Route::get('/categoria/{categoria}/editar', 'CategoriaController@edit')->middleware('admin');
Route::put('/categoria/{categoria}', 'CategoriaController@update')->middleware('admin');
Route::delete('/categoria/{categoria}', 'CategoriaController@destroy')->middleware('admin');

// RUTAS EMPLEADO
Route::get('/admin-profile/empleados', 'EmpleadoController@index');
Route::get('/pages/empleado', 'EmpleadoController@index');
Route::post('/empleado/insertar', 'EmpleadoController@store');
Route::get('/dashboard/empleado/{id}/index/edit','EmpleadoController@edit');

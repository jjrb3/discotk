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
    return view('inicio');
});

Route::get('/inicio/', function () {
    return view('inicio');
});

Route::get('/lista/', 'EventosController@Listado');
Route::get('/detalle/', 'EventosController@DetalleUsuario');
Route::get('/ver-detalle/', 'EventosController@Detalle');
Route::get('/administrador', 'EventosController@AdminConsultarTodo');
Route::get('/crear-editar/', 'EventosController@AdminCrearEditar');
Route::post('/guardar-crear-editar', 'EventosController@AdminGuardarCrearEditar');
Route::get('/eliminar/', 'EventosController@AdminEliminar');

Route::get('/ingresar', 'UsuarioController@Ingresar');
Route::get('/salir', 'UsuarioController@Salir');




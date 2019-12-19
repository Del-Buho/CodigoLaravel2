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
//Route::get('/', 'PagesController@pruebas');
Route::get('/', 'PagesController@login');
Route::post('menu', 'PagesController@validar')->name('login.validar');
Route::get('registro', 'PagesController@registro')->name('registro');

Route::post('agregarProducto/', 'PagesController@crear')->name('producto.crear');

Route::get('menu{id}', 'PagesController@menu')->name('menu');
Route::get('buscador/{id}', 'PagesController@buscador')->name('buscador');

Route::delete('buscador/eliminar/{codigo}', 'PagesController@eliminar')->name('buscador.eliminar');
Route::get('buscador/editar/{codigo}', 'PagesController@editar')->name('buscador.editar');

Route::put('buscador/editar/{codigo}/', 'PagesController@cambiarProducto')->name('cambiarProducto');


Route::get('agregarProducto/{id}', 'PagesController@agregarProducto')->name('agregarProducto');
Route::post('agregarProducto/', 'PagesController@crear')->name('producto.crear');


Route::get('agregarEmpresa/{id}', 'PagesController@agregarEmpresa')->name('agregarEmpresa');
Route::post('agregarEmpresa/', 'PagesController@crear2')->name('empresa.crear2');

Route::post('registrar', 'PagesController@registrar')->name('registro.crear');


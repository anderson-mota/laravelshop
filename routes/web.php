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

Route::group(['middleware' => ['auth', 'web']], function () {
    Route::get('panel/dashboard', 'HomeController@index')->name('admin.dashboard.home');

    //rutas para productos
    Route::get('panel/productos', 'ProductosController@index')->name('admin.productos.index');
    Route::get('panel/productos/crear', 'ProductosController@crear')->name('admin.productos.crear');
    Route::post('panel/productos/grabar', 'ProductosController@grabar')->name('admin.productos.grabar');
    Route::get('panel/productos/editar/{id}', 'ProductosController@editar')->name('admin.productos.editar');
    Route::post('panel/productos/cambiar/{id}', 'ProductosController@cambiar')->name('admin.productos.cambiar');
    Route::get('panel/productos/borrar/{id}', 'ProductosController@borrar')->name('admin.productos.borrar');

});



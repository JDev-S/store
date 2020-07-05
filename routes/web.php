<?php

use Illuminate\Support\Facades\Route;

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
    return view('/principal/index');
});

Route::get('/','ProductosController@principal_index');
Route::get('/productos_categoria','ProductosController@categoria_producto');
Route::get('/detalle_producto','ProductosController@info_producto');

/*CONTACTO*/
Route::get('/contacto', function () {
    return view('/principal/contacto');
});

Route::get('/registrarse', function () {
    return view('/principal/registrarse');
});

Route::get('/acerca_de', function () {
    return view('/principal/acerca_de');
});
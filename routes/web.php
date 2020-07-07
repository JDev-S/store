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

Route::post('/contactar', 'EmailController@contact')->name('contact');

Route::get('/registrarse', function () {
    return view('/principal/registrarse');
});

Route::get('/acerca_de', function () {
    return view('/principal/acerca_de');
});


/*INGRESAR AL CARRITO DE COMPRA*/
Route::post('/insertar_carrito','Detalle_ventaController@insertar_carrito')->name('insertar_carrito');
/*MOSTRAR CARRITO DE COMPRA*/
Route::get('/carrito_compra','Detalle_ventaController@mostrar_carrito_compra');
/*ELIMINAR DEL CARRITO DE COMPRA*/
Route::post('/eliminar_platillo','Detalle_ventaController@eliminar_platillo')->name('eliminar_platillo');
/*ACTUALIZAR CANTIDAD DEL PROCTO EN EL CARRITO DE COMPRA*/
Route::post('/actualizar_carrito','Detalle_ventaController@actualizar_carrito')->name('actualizar_carrito');
/*PROCEDER A PAGAR*/
Route::get('/checar','Detalle_ventaController@checar');

/*AGREGAR A FAVORITOS O QUITAR DE FAVORITOS*/
Route::post('/insertar_eliminar_favorito','FavoritosController@insertar_eliminar')->name('insertar_eliminar_favorito');

/*AGREGAR DIRECCION EN PROCESO DE PAGO*/
Route::post('/ingresar_direccion','Detalle_ventaController@ingresar_direccion')->name('ingresar_direccion');

/*AGREGAR A LA TABLA VENTA, REALIZAR PAGO Y AL HISTORIAL EN DETALLE VENTA*/
Route::post('/insertar_venta','Detalle_ventaController@insertar_venta')->name('insertar_venta');
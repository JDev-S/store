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
Route::get('/productos_categoria/{buscar?}','ProductosController@categoria_producto');
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

/*NO RECORDAR LA CONTRASEÑA*/
Route::get('/recuperar_contrasenia', function () {
    return view('/principal/recuperar_contrasenia');
});
/*OBTENER LA CONTRASEÑA DEL USUARIO*/
Route::post('/obtener_contrasenia','UsuarioController@obtener_contrasenia')->name('obtener_contrasenia');


/*INICIO DE SESION*/
Route::get('/iniciar_sesion','UsuarioController@mostrar_login');

/*Logueo*/
Route::post('/login','UsuarioController@login')->name('login');

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

/*PAGAR POR MERCADO PAGO*/
Route::get('/pago', function () {
    return view('/principal/pago');
});
//Route::post('pago_por_mercado','Mercado_pagoController@pago_por_mercado')->name('pago_por_mercado');

Route::post('/pago_por_mercado','Mercado_pagoController@pago_por_mercado')->name('pago_por_mercado');

/*REGISTRO DEL USUARIO TIPO CLIENTE */
Route::post('/registro','UsuarioController@registro')->name('registro');

/*PAGAR CON PAYPAL*/
Route::post('/pagar_paypal','PaypalController@pagar_paypal')->name('pagar_paypal');


/*RUTAS PARA LOS ADMINISTRADORES*/
Route::get('/Admin_restaurante', function () {
    return view('/Administrador/index');
});
/*ADMINISTRADOR CATEGORIA*/
Route::get('/admin_categoria','CategoriaController@categorias_mostrar');
Route::post('/admin_categoria_borrar','CategoriaController@eliminar');
Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');
Route::post('/Admin_categoria_editar','CategoriaController@actualizar');

/*ADMINISTRADOR DE PRODUCTOS*/
/*Administrador alimentos*/

Route::get('/admin_alimentos','ProductosController@alimentos_mostrar');

Route::post('/admin_alimentos_borrar','ProductosController@eliminar');

Route::get('/agregar_alimento','ProductosController@mostrar_insertar');

Route::post('/Admin_alimentos_nuevo','ProductosController@insertar')->name('Admin_alimentos_nuevo');


Route::get('/actualizar_alimento','ProductosController@mostrar_actualizar');
Route::post('/Admin_alimentos_editar','ProductosController@actualizar')->name('Admin_alimentos_editar');


/*ADMINISTRADOR DE USUARIOS*/
Route::get('/admin_usuario','UsuarioController@usuarios_mostrar');
Route::post('/admin_usuario_eliminar','UsuarioController@eliminar');
Route::get('/agregar_usuario','UsuarioController@mostrar_insertar');

/*ADMINISTRADOR DE DIRECCIONES*/

Route::get('/admin_direcciones/{direccion?}','DireccionController@direccion_mostrar');
Route::post('/admin_direccioneseliminar','DireccionController@eliminar')->name('admin_direccioneseliminar');
Route::post('/admin_direccionesingresar','DireccionController@insertar')->name('admin_direccionesingresar');
Route::post('/admin_direccionesactualizar','DireccionController@actualizar')->name('admin_direccionesactualizar');

//Route::post('/Admin_alimentos_nuevo','UsuarioController@insertar');
Route::post('/Admin_usuario_nuevo','UsuarioController@insertar')->name('Admin_usuario_nuevo');
Route::get('/actualizar_usuario','UsuarioController@mostrar_actualizar');
Route::post('/Admin_usuario_actualizar','UsuarioController@actualizar')->name('Admin_usuario_actualizar');

/*Administrador Metodo de pago*/
Route::get('/admin_metodo_de_pago','Metodo_pagoController@metodo_pago_mostrar');
Route::post('/admin_metodo_de_pago_eliminar','Metodo_pagoController@eliminar');
Route::post('/Admin_metodo_de_pago_insertar','Metodo_pagoController@insertar');
Route::post('/Admin_metodo_de_pago_actualizar','Metodo_pagoController@actualizar');

/*ADMINISTRADOR DE IMAGENES MUESTRA*/
Route::get('/admin_imagenes_muestra/{alimento?}','Imagenes_muestraController@imagenes_de_muestra_mostrar');
Route::post('/admin_imagenes_muestra_eliminar','Imagenes_muestraController@eliminar')->name('admin_imagenes_muestra_eliminar');
Route::post('/Admin_imagenes_muestra_insertar','Imagenes_muestraController@insertar')->name('Admin_imagenes_muestra_insertar');

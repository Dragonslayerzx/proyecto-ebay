<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MiEbay;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ResenasController;
use App\Http\Controllers\CarritosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function(){
    return view('vistaPrincipal');
})->name('principal');

Route::get('/productover', function(){
    return view('verProducto');
});

Route::get('/compras',
    [MiEbay::class, 'verCompras'])->name('ver.compras');

Route::get('/consultarCategoriasConSusHijos',
    [CategoriasController::class, 'consultarCategoriasConSusHijos']);

Route::get('/barra/obtener',function(){
    return view('barraBusqueda');
});

//------------------ Usuarios --------------------

//Registro
Route::get('usuario/registro', 
            [UsuariosController::class,'mostrarRegistro'])->name('usuario.registro');

Route::post('usuario/registro/guardar',
            [UsuariosController::class,'registrar'])->name('usuario.guardar');

//Autentificacion Login
Route::get('usuario/login',
            [UsuariosController::class,'mostrarLogin'])->name('usuario.login');

Route::post('usuario/login/auth',
            [UsuariosController::class,'login'])->name('usuario.auth');

//-- Mi ebay --
    //Datos personales
Route::get('/usuario/datos/{codigoUsuario?}',
        [UsuariosController::class, 'datosPersonales'])->name('usuario.datos');

    //Compras
Route::get('/usuario/compras/{codigoUsuario?}',
    [UsuariosController::class, 'verCompras'])->name('usuario.compras');

    //Lista favoritos
Route::get('/usuario/favoritos/{codigoUsuario?}',
    [UsuariosController::class, 'verListaFavoritos'])->name('usuario.favoritos');

//Listar producto
Route::get('/usuario/producto/listar/{codigoUsuario?}',
    [UsuariosController::class, 'listarProducto'])->name('usuario.listar');


// --------------------  CATEGORIAS ----------------------------
Route::get('/categorias/obtener',
    [CategoriasController::class, 'mostrarTodas'])->name('categorias.obtener');

Route::get('/categorias/productos/obtener/{codigoCategoria?}', //esto obtiene todos los productos de una categoria
    [CategoriasController::class, 'obtenerProductos'])->name('categoria.productos.obtener');


// ------------------- PRODUCTOS ---------------------------
Route::get('/productos/todos/obtener',
    [ProductosController::class, 'obtenerTodos'])->name('productos.obtener.todos');

Route::get('/producto/venta/obtener/{codigoProducto}',
    [ProductosController::class, 'obtener'])->name('producto.obtener.venta');

Route::get('/producto/subasta/obtener/{codigoProducto}',
    [ProductosController::class, 'obtener'])->name('producto.obtener.subasta');

Route::post('/producto/listar/{codigoUsuario?}',
    [ProductosController::class, 'listar'])->name('producto.listar');


//--------------------- RESEÑAS -------------------
Route::post('/resenas/agregar/{codigoProducto}',
    [ResenasController::class, 'agregarResenaAProducto'])->name('resena.agregar');

Route::post('/resenas/venta/agregar/{codigoProducto}/{codigoUsuario?}',
    [ResenasController::class, 'agregarResenaAProducto'])->name('resena.venta.agregar');

Route::post('/resenas/subasta/agregar/{codigoProducto}/{codigoUsuario?}',
    [ResenasController::class, 'agregarResenaAProducto'])->name('resena.subasta.agregar');


//--------------------- CARRITO -----------------------
Route::get('/carrito/mostrar/{codigoUsuario?}',
    [CarritosController::class, 'mostrar'])->name('carrito.mostrar');
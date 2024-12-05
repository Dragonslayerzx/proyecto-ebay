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
})->name('vistaprincipal');

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
Route::get('usuarios/registro', 
            [UsuariosController::class,'mostrarRegistro'])->name('usuario.registro');

Route::post('usuarios/registro/guardar',
            [UsuariosController::class,'registrar'])->name('usuario.guardar');

//Autentificacion Login
Route::get('usuarios/login',
            [UsuariosController::class,'mostrarLogin'])->name('usuario.login');

Route::post('usuarios/login/auth',
            [UsuariosController::class,'login'])->name('usuario.auth');


// --------------------  CATEGORIAS ----------------------------
Route::get('/categorias/obtener',
    [CategoriasController::class, 'mostrarTodas'])->name('categorias.obtener');

Route::get('/categorias/productos/obtener/{codigoCategoria?}', //esto obtiene todos los productos de una categoria
    [CategoriasController::class, 'obtenerProductos'])->name('categoria.productos.obtener');


// ------------------- PRODUCTOS ---------------------------
Route::get('/productos/todos/obtener',
    [ProductosController::class, 'obtenerTodos'])->name('productos.obtener.todos');

Route::get('/producto/obtener/{codigoProducto}',
    [ProductosController::class, 'obtener'])->name('producto.obtener');


//--------------------- RESEÑAS -------------------
Route::post('/resenas/agregar/{codigoProducto}',
    [ResenasController::class, 'agregarResenaAProducto'])->name('resena.agregar');


//--------------------- CARRITO -----------------------
Route::get('/carrito/mostrar/{codigoUsuario?}',
    [CarritosController::class, 'mostrar'])->name('carrito.mostrar');
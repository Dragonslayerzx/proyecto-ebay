<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MiEbay;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CategoriasController;

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


// Seccion para Usuarios

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
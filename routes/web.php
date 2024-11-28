<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MiEbay;
use App\Http\Controllers\CategoriasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function(){
    return view('vistaPrincipal');
});

Route::get('/productover', function(){
    return view('verProducto');
});

Route::get('/compras',
    [MiEbay::class, 'verCompras'])->name('ver.compras');

Route::get('/consultarCategoriasConSusHijos',
    [CategoriasController::class, 'consultarCategoriasConSusHijos']);

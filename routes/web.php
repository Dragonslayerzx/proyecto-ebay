<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function(){
    return view('vistaPrincipal');
});

Route::get('/productover', function(){
    return view('verProducto');
});

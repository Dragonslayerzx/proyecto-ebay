<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TBL_PRODUCTOS;

class ProductosController extends Controller
{
    public function prueba(){
        $productos = TBL_PRODUCTOS::find(1);
        dd($productos->TBL_SUBASTAS);
    }

    public function obtenerTodos(){
        $productos = TBL_PRODUCTOS::all();
        return $productos;
    }
}

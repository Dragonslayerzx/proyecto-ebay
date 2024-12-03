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

    public function obtener($codigoProducto){
        $producto = TBL_PRODUCTOS::find($codigoProducto);
        return view('verProducto',compact('producto'));
    }

    public function obtenerTodosYCodigoCategoria($codigoCategoria){
        $productosCategoria = TBL_PRODUCTOS::all();
        return view('productosCategoria',compact('productosCategoria','codigoCategoria'));
    }
}

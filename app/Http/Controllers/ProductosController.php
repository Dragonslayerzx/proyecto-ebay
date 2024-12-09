<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TBL_PRODUCTOS;
use App\Models\TBL_PRODUCTOS_EN_VENTA;
use App\Models\TBL_SUBASTAS;

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

    public function obtener(Request $request, $codigoProducto){
        //$producto = TBL_PRODUCTOS::find($codigoProducto);
        //dd($producto->TBL_RESENAS[0]->TBL_USUARIOS);
        //return view('verProducto',compact('producto'));

        $routeName = $request->route()->getName();

        if ($routeName === 'producto.obtener.venta'){
            $productoEnVenta = TBL_PRODUCTOS_EN_VENTA::find($codigoProducto);
            //$producto = $productoEnVenta->TBL_PRODUCTOS;
            //dd($producto);
            return view('verProductoEnVenta',compact('productoEnVenta'));
        }  elseif ($routeName === 'producto.obtener.subasta'){
            $productoEnSubasta = TBL_SUBASTAS::find($codigoProducto);
            //$producto = $productoEnSubasta->TBL_PRODUCTOS;
            //dd($producto->TBL_SUBASTAS[0]->precio_inicio);
            //return view('verProducto',compact('producto'));
            return view('verProductoEnSubasta',compact('productoEnSubasta'));

        } else{
            return view ('usuariosRegistro');
        }

    }

    public function obtenerTodosYCodigoCategoria($codigoCategoria){
        $productosCategoria = TBL_PRODUCTOS::all();
        return view('productosCategoria',compact('productosCategoria','codigoCategoria'));
    }
}

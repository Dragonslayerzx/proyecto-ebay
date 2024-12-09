<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TBL_RESENAS;

class ResenasController extends Controller
{
    public function agregarResenaAProducto($codigoProducto, Request $request){
        if($request){
            $nvaResena = new TBL_RESENAS();
            $nvaResena->codigo_producto = $request->codigoProducto;
            $nvaResena->codigo_usuario = 1; //por ahora valor quemado xd
            $nvaResena->comentario = $request->comentario;
            $nvaResena->valoracion = $request->valoracion;
            $nvaResena->save();
        }
        $routeName = $request->route()->getName();

        if ($routeName === 'resena.venta.agregar'){
            return redirect()->route('producto.obtener.venta', $codigoProducto);
        }
    }
}

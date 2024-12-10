<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TBL_RESENAS;
use App\Models\TBL_USUARIOS;

class ResenasController extends Controller
{
    public function agregarResenaAProducto($codigoProducto, $codigoUsuario = null, Request $request){
        if($request && $codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                $nvaResena = new TBL_RESENAS();
                $nvaResena->codigo_producto = $request->codigoProducto;
                $nvaResena->codigo_usuario = $codigoUsuario;
                $nvaResena->comentario = $request->comentario;
                $nvaResena->valoracion = $request->valoracion;
                $nvaResena->save();
            }else{
                return redirect()->route('principal');
            }
        }else{
            return redirect()->route('principal');
        }
        $routeName = $request->route()->getName();

        if ($routeName === 'resena.venta.agregar'){
            return redirect()->route('producto.obtener.venta', $codigoProducto);
        }
    }
}

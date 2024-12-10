<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TBL_RESENAS;
use App\Models\TBL_USUARIOS;

class ResenasController extends Controller
{
    public function agregarResenaAProducto(Request $request, $codigoProducto, $codigoUsuario = null){
        if($request && $codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                //dd($request);
                $nvaResena = new TBL_RESENAS();
                $nvaResena->codigo_producto = $codigoProducto;
                $nvaResena->codigo_usuario = $codigoUsuario;
                $nvaResena->comentario = $request->comentario;
                $nvaResena->valoracion = $request->valoracion;
                $nvaResena->save();
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
        $routeName = $request->route()->getName();

        if ($routeName === 'resena.venta.agregar'){
            return redirect()->route('producto.obtener.venta', $codigoProducto);
        }elseif($routeName === 'resena.subasta.agregar'){
            return redirect()->route('producto.obtener.subasta', $codigoProducto);
        }else{
            return redirect()->route('usuario.registro');
        }
    }
}

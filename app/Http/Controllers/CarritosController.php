<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TBL_PRODUCTOS_CARRITOS;
use App\Models\TBL_USUARIOS;
use App\Models\TBL_PRODUCTOS;
use App\Models\TBL_PRODUCTOS_EN_VENTA;

class CarritosController extends Controller
{
    public function mostrar($codigoUsuario = null){

        if($codigoUsuario){

            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){ //Conseguir el carrito del usuario, si existe el usuario
                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;
                //dd($carritoUsuario[0]->TBL_PRODUCTOS->TBL_PRODUCTOS_EN_VENTA);
                return view('carritoEbay', compact('carritoUsuario'));

            }else{
                return redirect()->route('usuario.registro');
            }

        }else{

            return redirect()->route('usuario.registro');

        }

    }
}

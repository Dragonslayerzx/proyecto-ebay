<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TBL_PRODUCTOS;
use App\Models\TBL_PRODUCTOS_EN_VENTA;
use App\Models\TBL_SUBASTAS;
use App\Models\TBL_USUARIOS;


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

    public function obtener(Request $request, $codigoProducto, $codigoUsuario = null){
        //$producto = TBL_PRODUCTOS::find($codigoProducto);
        //dd($producto->TBL_RESENAS[0]->TBL_USUARIOS);
        //return view('verProducto',compact('producto'));

        $routeName = $request->route()->getName();

        if($codigoUsuario){

            $usuario = TBL_USUARIOS::find($codigoUsuario);

            if($usuario){

                if ($routeName === 'producto.obtener.venta'){
                    $productoEnVenta = TBL_PRODUCTOS_EN_VENTA::find($codigoProducto);
                    //$producto = $productoEnVenta->TBL_PRODUCTOS;
                    //dd($producto);
                    return view('verProductoEnVenta',compact('productoEnVenta','usuario'));
                }  elseif ($routeName === 'producto.obtener.subasta'){
                    $productoEnSubasta = TBL_SUBASTAS::find($codigoProducto);
                    //$producto = $productoEnSubasta->TBL_PRODUCTOS;
                    //dd($producto->TBL_SUBASTAS[0]->precio_inicio);
                    //return view('verProducto',compact('producto'));
                    return view('verProductoEnSubasta',compact('productoEnSubasta','usuario'));

                } else{
                    return redirect()->route('usuario.registro');
                }

            }else{
                return redirect()->route('usuario.registro');
            }

        }else{
            return redirect()->route('usuario.registro');
        }

    }

    public function obtenerTodosYCodigoCategoria($codigoCategoria){
        $productosCategoria = TBL_PRODUCTOS::all();
        return view('productosCategoria',compact('productosCategoria','codigoCategoria'));
    }

    public function listar(Request $request, $codigoUsuario = null){
        if($codigoUsuario && $request){

            $producto = new TBL_PRODUCTOS();
            $producto->codigo_categoria = $request->codigoCategoria;
            $producto->codigo_usuario = $codigoUsuario;
            $producto->nombre_producto = $request->nombreProducto;
            $producto->descripcion = $request->descripcionProducto;
            $producto->marca = $request->marcaProducto;
            $producto->modelo = $request->modeloProducto;
            $producto->cantidad_disponible = $request->cantidadProducto;
            $producto->precio = $request->precioProducto;
            $producto->foto = $request->fotoProducto;
            $producto->codigo_condicion_producto = $request->codigoCondicionProducto;
            $producto->save();

            return redirect()->route('principal');

        }else{
            return redirect()->route('usuario.registro');
        }
    }

}

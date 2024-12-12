<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TBL_PRODUCTOS_CARRITOS;
use App\Models\TBL_USUARIOS;
use App\Models\TBL_PRODUCTOS;
use App\Models\TBL_PRODUCTOS_EN_VENTA;
use App\Models\TBL_SUBASTAS;
use App\Models\TBL_DETALLE_FACTURAS;
use App\Models\TBL_FACTURAS;

class CarritosController extends Controller
{
    public function mostrar($codigoUsuario = null){

        if($codigoUsuario){

            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){ //Conseguir el carrito del usuario, si existe el usuario
                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;
                //dd($carritoUsuario[0]->TBL_PRODUCTOS_EN_VENTA->TBL_PRODUCTOS);
                return view('carritoEbay', compact('carritoUsuario'));

            }else{
                return redirect()->route('usuario.registro');
            }

        }else{

            return redirect()->route('usuario.registro');

        }

    }

    public function actualizarProductoSubasta($codigoProductoSubastaEnCarrito, $codigoUsuario = null)
    {
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){

                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;
                
                foreach ($carritoUsuario as $infoProductoEnCarrito) {
                    
                    if($infoProductoEnCarrito->codigo_subasta === $codigoProductoSubastaEnCarrito){
                        $infoProductoEnCarrito->cantidad_producto = TBL_SUBASTAS::find($codigoProductoSubastaEnCarrito)->cantidad;
                        $infoProductoEnCarrito->save();
                        //dd($infoProductoEnCarrito);
                    }
                }

                return redirect()->route('carrito.mostrar', $codigoUsuario);
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function actualizarProductoEnVenta($codigoProductoVentaEnCarrito, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){

                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;
                
                foreach ($carritoUsuario as $infoProductoEnCarrito) {
                    
                    if($infoProductoEnCarrito->codigo_producto_en_venta === $codigoProductoVentaEnCarrito){
                        $infoProductoEnCarrito->cantidad_producto = TBL_PRODUCTOS_EN_VENTA::find($codigoProductoVentaEnCarrito)->cantidad;
                        $infoProductoEnCarrito->save();
                        //dd($infoProductoEnCarrito);
                    }
                }

                return redirect()->route('carrito.mostrar', $codigoUsuario);
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function añadirUnidadProductoEnVenta($codigoProductoVentaEnCarrito, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){

                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;
                
                foreach ($carritoUsuario as $infoProductoEnCarrito) {
                    
                    if($infoProductoEnCarrito->codigo_producto_en_venta === $codigoProductoVentaEnCarrito){
                        $infoProductoEnCarrito->cantidad_producto = 1;
                        $infoProductoEnCarrito->save();
                        
                    }
                }
                //dd($infoProductoEnCarrito);
                return redirect()->route('carrito.mostrar', $codigoUsuario);
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function añadirUnidadProductoEnSubasta($codigoProductoSubastaEnCarrito, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){

                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;
                
                foreach ($carritoUsuario as $infoProductoEnCarrito) {
                    
                    if($infoProductoEnCarrito->codigo_subasta === $codigoProductoSubastaEnCarrito){
                        $infoProductoEnCarrito->cantidad_producto = $infoProductoEnCarrito->TBL_SUBASTAS->cantidad;
                        $infoProductoEnCarrito->save();
                        
                    }
                }
                //dd($infoProductoEnCarrito);
                return redirect()->route('carrito.mostrar', $codigoUsuario);
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function añadirCantidadProductoEnVenta($codigoProductoVentaEnCarrito, $cantidadProducto, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario && $cantidadProducto > 0){

                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;
                
                foreach ($carritoUsuario as $infoProductoEnCarrito) {
                    
                    if($infoProductoEnCarrito->codigo_producto_en_venta === $codigoProductoVentaEnCarrito){
                        $infoProductoEnCarrito->cantidad_producto = $cantidadProducto;
                        $infoProductoEnCarrito->save();
                        
                    }
                }
                //dd($infoProductoEnCarrito);
                return redirect()->route('carrito.mostrar', $codigoUsuario);
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function verDetallesTransaccion($codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                
                return view('completarTransaccionCarrito', compact('usuario'));
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function confirmarCompra($totalVenta, $codigoUsuario = null){
        if($codigoUsuario && $totalVenta > 0){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                
                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;

                if($carritoUsuario){

                    $nvaFactura = new TBL_FACTURAS();
                    $nvaFactura->codigo_usuario = $usuario->codigo_usuario;
                    $nvaFactura->monto = $totalVenta; //este total ya incluye el subtotal y el ISV del 15%
                    $nvaFactura->save();
                    foreach ($carritoUsuario as $productoCarrito) {

                        $nvoDetalleFactura = new TBL_DETALLE_FACTURAS();

                        $nvoDetalleFactura->codigo_factura = $nvaFactura->codigo_factura;

                        if(!is_null($productoCarrito->TBL_PRODUCTOS_EN_VENTA)){
                            $detalleProductoVenta = $productoCarrito->TBL_PRODUCTOS_EN_VENTA->TBL_PRODUCTOS;

                            $productoCarrito->TBL_PRODUCTOS_EN_VENTA->cantidad -= $productoCarrito->cantidad_producto;
                            $productoCarrito->TBL_PRODUCTOS_EN_VENTA->save();

                            $productoCarrito->TBL_PRODUCTOS_EN_VENTA->TBL_PRODUCTOS->cantidad_disponible -= $productoCarrito->cantidad_producto;
                            $productoCarrito->TBL_PRODUCTOS_EN_VENTA->TBL_PRODUCTOS->save();
                            
                            $nvoDetalleFactura->codigo_producto = $detalleProductoVenta->codigo_producto;
                            $nvoDetalleFactura->precio = $detalleProductoVenta->precio;
                            $nvoDetalleFactura->cantidad = $productoCarrito->cantidad_producto;
                            $nvoDetalleFactura->tipo_compra = 1;

                        }
                        if(!is_null($productoCarrito->TBL_SUBASTAS)){
                            $detalleProductoSubasta = $productoCarrito->TBL_SUBASTAS->TBL_PRODUCTOS;

                            $productoCarrito->TBL_SUBASTAS->cantidad -= $productoCarrito->cantidad_producto;
                            $productoCarrito->TBL_SUBASTAS->save();

                            $productoCarrito->TBL_SUBASTAS->TBL_PRODUCTOS->cantidad_disponible -= $productoCarrito->cantidad_producto;
                            $productoCarrito->TBL_SUBASTAS->TBL_PRODUCTOS->save();

                            $nvoDetalleFactura->codigo_producto = $detalleProductoSubasta->codigo_producto;
                            $nvoDetalleFactura->precio = $detalleProductoSubasta->precio;
                            $nvoDetalleFactura->cantidad = $productoCarrito->cantidad_producto;
                            $nvoDetalleFactura->tipo_compra = 0;

                        }

                        $nvoDetalleFactura->save();

                        //FALTA ELIMINAR EL CARRITO (opcional la verdad algunas paginas no lo eliminan)
                    
                    }

                    //dd($usuario->TBL_FACTURAS->TBL_DETALLE_FACTURAS);

                    return redirect()->route('usuario.compras', $usuario->codigo_usuario);


                }else{
                    return redirect()->route('usuario.registro');
                }
                
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function eliminarProductoVentaCarrito($codigoProductoVenta, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                
                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;

                //dd($carritoUsuario);

                foreach ($carritoUsuario as $productoCarrito) {
                    
                    if(!is_null($productoCarrito->TBL_PRODUCTOS_EN_VENTA)){
                        
                        if($productoCarrito->codigo_producto_en_venta === $codigoProductoVenta){

                            $productoCarrito->delete();
                            
                        }
                    }
                }

                return redirect()->route('carrito.mostrar', $codigoUsuario);

            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function eliminarProductoSubastaCarrito($codigoProductoSubasta, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                
                $carritoUsuario = $usuario->TBL_PRODUCTOS_CARRITOS;

                //dd($carritoUsuario);

                foreach ($carritoUsuario as $productoCarrito) {
                    
                    if(!is_null($productoCarrito->TBL_SUBASTAS)){
                        
                        if($productoCarrito->codigo_subasta === $codigoProductoSubasta){

                            $productoCarrito->delete();
                            
                        }
                    }
                }

                return redirect()->route('carrito.mostrar', $codigoUsuario);

            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function agregarProductoCarrito(Request $request, $codigoProductoEnApartado, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                
                $routeName = $request->route()->getName();

                //dd($request);

                if($routeName === 'carrito.producto.venta.agregar'){

                    $nvoProductoEnVentaACarrito = new TBL_PRODUCTOS_CARRITOS();
                    $nvoProductoEnVentaACarrito->codigo_usuario = $usuario->codigo_usuario;
                    $nvoProductoEnVentaACarrito->cantidad_producto = $request->cantidadProductoVenta;
                    $nvoProductoEnVentaACarrito->codigo_producto_en_venta = $codigoProductoEnApartado;
                    $nvoProductoEnVentaACarrito->save();

                    return redirect()->route('carrito.mostrar', $codigoUsuario);

                }elseif($routeName === 'carrito.producto.subasta.agregar'){

                    $nvoProductoEnSubastaACarrito = new TBL_PRODUCTOS_CARRITOS();
                    $nvoProductoEnSubastaACarrito->codigo_usuario = $usuario->codigo_usuario;
                    $nvoProductoEnSubastaACarrito->cantidad_producto = TBL_SUBASTAS::find($codigoProductoEnApartado)->cantidad;
                    $nvoProductoEnSubastaACarrito->codigo_subasta = $codigoProductoEnApartado;
                    $nvoProductoEnSubastaACarrito->save();

                    return redirect()->route('carrito.mostrar', $codigoUsuario);

                }else{
                    return redirect()->route('usuario.registro');
                }
                
            }else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

}

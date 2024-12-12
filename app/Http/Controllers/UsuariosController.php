<?php

namespace App\Http\Controllers;

use App\Models\TBL_USUARIOS;
use App\Models\TBL_CONDICION_PRODUCTOS;
use App\Models\TBL_CATEGORIAS;
use App\Models\TBL_DIRECCIONES;
use App\Models\TBL_DIRECCIONES_USUARIO;
use App\Models\TBL_PRODUCTOS;
use App\Models\TBL_PRODUCTOS_EN_VENTA;
use App\Models\TBL_SUBASTAS;
use App\Models\TBL_DETALLE_FACTURAS;
use App\Models\TBL_TARJETAS;
use App\Models\TBL_SERVICIOS_PAGOS;
use App\Models\TBL_SERVICIOS_X_USUARIOS;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;      //Proporciona metodo para hash
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon; //Para pasar fechas a diferentes formatos


class UsuariosController extends Controller
{
    public function mostrarRegistro(){
        return view('usuariosRegistro');
    }

    public function registrar(Request $request){
        $usuario = new TBL_USUARIOS();

        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->nombre_usuario = $request->input('usuario');
        $usuario->telefono = $request->input('telefono');
        $usuario->correo = $request->input('correo');
        $usuario->contrasena = Hash::make($request->input('contrasena'));
        $usuario->save();
        

        return redirect()->route('usuario.login');
    }

    public function mostrarLogin(){
        return view('usuariosLogin');
    }

    public function login(Request $request){
        
        //metodo proporcionado por Auth para autenticar usuarios
        $credentials = [
            'nombre_usuario' => $request->input('usuario'),
            'password' => $request->input('contrasena'), //Laravel busca campo password
        ];
        //dd($credentials);  // Verifica que las credenciales sean correctas

        if(Auth::attempt($credentials)){
            //dd('Autenticación exitosa', Auth::user());
            //return redirect()->route('vistaprincipal');
            return response()->json([
                'success' => true,
                'user' => Auth::user(), // Retorna los datos del usuario autenticado
            ]);
        }else{
            //dd(Auth::user());
            //return back()->withErrors(['mensaje' => 'Credenciales incorrectas']);
            return response()->json([
                'success' => false,
                'message' => 'Credenciales incorrectas',
            ], 401);
        }
    }

    public function datosPersonales($codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
            //dd($usuario->TBL_DIRECCIONES_USUARIO[0]->TBL_DIRECCIONES);
                return view('miEbayDatosPersonales', compact('usuario'));
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function datosPagos($codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
            //dd($usuario->TBL_DIRECCIONES_USUARIO[0]->TBL_DIRECCIONES);
                $serviciosPagos = TBL_SERVICIOS_PAGOS::all();
                //$serviciosPagos = TBL_SERVICIOS_X_USUARIOS::whereRaw('codigo_usuario = 21 and codigo_servicio = 2')->first();
                //dd($serviciosPagos);
                return view('miEbayPagos', compact('usuario','serviciosPagos'));
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function agregarTarjeta(Request $request, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario && $request){
                $nombreTitular = ''.$request->nombreTitular.' '.$request->apellidoTitular;
                $fechaFormateada = Carbon::parse($request->fechaVencimiento)->format('Y-m-d');

                $nvaTarjetaUsuario = new TBL_TARJETAS();
                $nvaTarjetaUsuario->codigo_usuario = $usuario->codigo_usuario;
                $nvaTarjetaUsuario->numero_tarjeta = $request->numeroTarjeta;
                $nvaTarjetaUsuario->fecha_vencimiento = $fechaFormateada;
                $nvaTarjetaUsuario->cvv = $request->cvv;
                $nvaTarjetaUsuario->titular = $nombreTitular;
                $nvaTarjetaUsuario->save();

                return redirect()->route('usuario.datos.pagos', compact('codigoUsuario'));

            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function eliminarTarjeta($codigoTarjeta, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                
                $tarjetaEliminar = TBL_TARJETAS::find($codigoTarjeta);
                $tarjetaEliminar->delete();

                return redirect()->route('usuario.datos.pagos', $usuario->codigo_usuario);
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function agregarServicioPago(Request $request, $codigoUsuario = null){
        if($codigoUsuario && $request->codigoServicioPago){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                $serviciosPagosCoincidencia = TBL_SERVICIOS_X_USUARIOS::whereRaw('codigo_usuario = '.$usuario->codigo_usuario.' and codigo_servicio = '.$request->codigoServicioPago)->first();
                //dd($serviciosPagosCoincidencia->TBL_SERVICIOS_PAGOS);
                //dd($request);
                
                if($serviciosPagosCoincidencia){ //ya existe ese servicio en el usuario
                    return redirect()->route('usuario.datos.pagos', $usuario->codigo_usuario);
                }else{
                    //dd($serviciosPagosCoincidencia->TBL_SERVICIOS_PAGOS);
                    $nvoServicioUsuario = new TBL_SERVICIOS_X_USUARIOS();
                    $nvoServicioUsuario->codigo_usuario = $usuario->codigo_usuario;
                    $nvoServicioUsuario->codigo_servicio = $request->codigoServicioPago;
                    $nvoServicioUsuario->save();

                    return redirect()->route('usuario.datos.pagos', $usuario->codigo_usuario);
                }
                
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function eliminarServicioPago($codigoServicioPago, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                //return view('miEbayDatosPersonales', compact('usuario'));
                //dd($codigoServicioPago);
                /*
                $serviciosPagosCoincidencia = TBL_SERVICIOS_X_USUARIOS::whereRaw('codigo_usuario = '.$usuario->codigo_usuario.' and codigo_servicio = '.$codigoServicioPago)->first();
                if($serviciosPagosCoincidencia){
                    $serviciosPagosCoincidencia->delete();
                }
                */

                TBL_SERVICIOS_X_USUARIOS::where([
                    ['codigo_usuario', '=', $usuario->codigo_usuario],
                    ['codigo_servicio', '=', $codigoServicioPago],
                ])->delete();
                

                return redirect()->route('usuario.datos.pagos', $usuario->codigo_usuario);

            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function listarProducto($codigoUsuario = null){
        if($codigoUsuario){

            $usuario = TBL_USUARIOS::find($codigoUsuario);

            if($usuario){

                $categorias = TBL_CATEGORIAS::all();
                $condicionesProducto = TBL_CONDICION_PRODUCTOS::all();

                return view('subirProducto', compact('categorias','condicionesProducto','usuario'));
            }

        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function verCompras($codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                //dd($usuario->TBL_FACTURAS[0]->TBL_DETALLE_FACTURAS);
                return view('miEbayCompras', compact('usuario'));
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function verListaFavoritos($codigoUsuario = null){
        if($codigoUsuario){
            return view('listaFavoritos');
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function listarConfirmar(Request $request, $codigoUsuario = null){
        if($codigoUsuario && $request){

            if(TBL_USUARIOS::find($codigoUsuario)){

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
            }

            else{
                return redirect()->route('usuario.registro');
            }

        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function verListados($codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                //dd($usuario->TBL_PRODUCTOS);
                return view('productosListados', compact('usuario'));
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function verActivos($codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                return view('ventasActivas', compact('usuario'));
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function activarProducto(Request $request, $codigoProducto, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){

                $routeName = $request->route()->getName();
                //dd($request);

                if($routeName === 'usuario.producto.activar.venta'){
                    $nvoProductoVenta = new TBL_PRODUCTOS_EN_VENTA();
                    $nvoProductoVenta->codigo_producto = $codigoProducto;
                    $nvoProductoVenta->cantidad = $request->cantidad;
                    $nvoProductoVenta->save();
                }

                if($routeName === 'usuario.producto.activar.subasta'){

                    $fechaInicioFormateada = Carbon::parse($request->fechaInicio)->format('Y-m-d H:i:s');
                    $fechaFinFormateada = Carbon::parse($request->fechaFin)->format('Y-m-d H:i:s');

                    $nvoProductoSubasta = new TBL_SUBASTAS();
                    $nvoProductoSubasta->codigo_producto = $codigoProducto;
                    $nvoProductoSubasta->codigo_estado_subasta = 1; //1 es activa en la bd
                    $nvoProductoSubasta->precio_inicio = $request->precioInicio;
                    $nvoProductoSubasta->fecha_inicio = $fechaInicioFormateada;
                    $nvoProductoSubasta->fecha_fin = $fechaFinFormateada;
                    $nvoProductoSubasta->cantidad = $request->cantidad;
                    $nvoProductoSubasta->save();
                }

                return redirect()->route('principal');
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function verVendidos($codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario){
                $detalleFacturas = TBL_DETALLE_FACTURAS::all();
                //dd($detalleFacturas[0]->TBL_PRODUCTOS->TBL_USUARIOS->nombre_usuario);
                return view('ventasVendidas', compact('usuario','detalleFacturas'));
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function actualizarTelefono(Request $request, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            if($usuario && $request->telefono){
                //dd($request);

                $usuario->telefono = $request->telefono;
                $usuario->save();

                return redirect()->route('usuario.datos', $usuario);
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function actualizarNombreUsuario(Request $request, $codigoUsuario = null){
        if($codigoUsuario){
            $usuario = TBL_USUARIOS::find($codigoUsuario);
            $usuariosTodos = TBL_USUARIOS::all();
            if($usuario && $request->nombreUsuario){
                //dd($request);

                $coincidencia = 0;

                foreach ($usuariosTodos as $infoUsuarioIndividual) {
                    if($infoUsuarioIndividual->nombre_usuario == $request->nombreUsuario){
                        $coincidencia += 1;
                    }
                }

                if($coincidencia == 0){
                    $usuario->nombre_usuario = $request->nombreUsuario;
                    $usuario->save();
                }

                return redirect()->route('usuario.datos', $usuario);
            }
            else{
                return redirect()->route('usuario.registro');
            }
        }else{
            return redirect()->route('usuario.registro');
        }
    }

}

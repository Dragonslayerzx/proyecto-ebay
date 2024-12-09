<?php

namespace App\Http\Controllers;

use App\Models\TBL_USUARIOS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;      //Proporciona metodo para hash
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UsuariosController extends Controller
{
    public function mostrarRegistro(){
        return view('usuariosRegistro');
    }

    public function registrar(Request $request){
        //Validacion de usuario
        /*$validator = Validator::make(request()->all(), [
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'usuario' => 'required|string|max:100',
            'correo' => 'required|string|email|max:100|unique:TBL_USUARIOS,correo',
            'contra' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        */
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
            if($usuario)
            return view('miEbayDatosPersonales', compact('usuario'));
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function listarProducto($codigoUsuario = null){
        if($codigoUsuario){
            return view('subirProducto');
        }else{
            return redirect()->route('usuario.registro');
        }
    }

    public function verCompras($codigoUsuario = null){
        if($codigoUsuario){
            return view('miEbayCompras');
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

}

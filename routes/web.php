<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MiEbay;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ResenasController;
use App\Http\Controllers\CarritosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function(){
    return view('vistaPrincipal');
})->name('principal');

Route::get('/productover', function(){
    return view('verProducto');
});

Route::get('/compras',
    [MiEbay::class, 'verCompras'])->name('ver.compras');

Route::get('/consultarCategoriasConSusHijos',
    [CategoriasController::class, 'consultarCategoriasConSusHijos']);

Route::get('/barra/obtener',function(){
    return view('barraBusqueda');
});

//------------------ Usuarios --------------------

//Registro
Route::get('usuario/registro', 
            [UsuariosController::class,'mostrarRegistro'])->name('usuario.registro');

Route::post('usuario/registro/guardar',
            [UsuariosController::class,'registrar'])->name('usuario.guardar');

//Autentificacion Login
Route::get('usuario/login',
            [UsuariosController::class,'mostrarLogin'])->name('usuario.login');

Route::post('usuario/login/auth',
            [UsuariosController::class,'login'])->name('usuario.auth');

//-- Mi ebay --
    //Datos personales
Route::get('/usuario/datos/{codigoUsuario?}',
    [UsuariosController::class, 'datosPersonales'])->name('usuario.datos');

    //Compras
Route::get('/usuario/compras/{codigoUsuario?}',
    [UsuariosController::class, 'verCompras'])->name('usuario.compras');

    //Lista favoritos
Route::get('/usuario/favoritos/{codigoUsuario?}',
    [UsuariosController::class, 'verListaFavoritos'])->name('usuario.favoritos');

//Listar producto
Route::get('/usuario/producto/listar/{codigoUsuario?}',
    [UsuariosController::class, 'listarProducto'])->name('usuario.listar');

// Route::post('/producto/listar/{codigoUsuario?}',
// [UsuariosController::class, 'listar'])->name('producto.listar');

Route::post('/usuario/producto/listar/confirmar/{codigoUsuario?}',
    [UsuariosController::class, 'listarConfirmar'])->name('usuario.producto.listar.confirmar');

Route::get('/usuario/productos/mostrar/listados/{codigoUsuario?}',
    [UsuariosController::class, 'verListados'])->name('usuario.producto.mostrar.listados');
    
Route::get('/usuario/productos/mostrar/activos/{codigoUsuario?}',
    [UsuariosController::class, 'verActivos'])->name('usuario.producto.mostrar.activos');

Route::post('/usuario/producto/activar/venta/{codigoProducto}/{codigoUsuario?}',
    [UsuariosController::class, 'activarProducto'])->name('usuario.producto.activar.venta');

Route::post('/usuario/producto/activar/subasta/{codigoProducto}/{codigoUsuario?}',
    [UsuariosController::class, 'activarProducto'])->name('usuario.producto.activar.subasta');

Route::get('/usuario/productos/mostrar/vendidos/{codigoUsuario?}',
    [UsuariosController::class, 'verVendidos'])->name('usuario.producto.mostrar.vendidos');

Route::post('/usuario/datos/telefono/actualizar/{codigoUsuario?}',
    [UsuariosController::class, 'actualizarTelefono'])->name('usuario.datos.telefono.actualizar');

Route::post('/usuario/datos/nombreUsuario/actualizar/{codigoUsuario?}',
    [UsuariosController::class, 'actualizarNombreUsuario'])->name('usuario.datos.nombreUsuario.actualizar');

Route::get('/usuario/datos/pagos/{codigoUsuario?}',
    [UsuariosController::class, 'datosPagos'])->name('usuario.datos.pagos');

Route::post('/usuario/datos/tarjeta/agregar/{codigoUsuario?}',
    [UsuariosController::class, 'agregarTarjeta'])->name('usuario.tarjeta.agregar');
    
Route::get('/usuario/datos/tarjeta/eliminar/{codigoTarjeta}/{codigoUsuario?}',
    [UsuariosController::class, 'eliminarTarjeta'])->name('usuario.tarjeta.eliminar');
    
Route::post('/usuario/datos/servicio/pago/agregar/{codigoUsuario?}',
    [UsuariosController::class, 'agregarServicioPago'])->name('usuario.servicio.pago.agregar');

Route::get('/usuario/datos/servicio/pago/eliminar/{codigoServicioPago}/{codigoUsuario?}',
    [UsuariosController::class, 'eliminarServicioPago'])->name('usuario.servicio.pago.eliminar');

Route::get('/usuario/datos/direcciones/mostrar/{codigoUsuario?}',
    [UsuariosController::class, 'mostrarDirecciones'])->name('usuario.direcciones.mostrar');
    
Route::post('/usuario/datos/direcciones/agregar/{codigoUsuario?}',
    [UsuariosController::class, 'agregarDireccion'])->name('usuario.direccion.agregar');
    
Route::get('/usuario/datos/direcciones/eliminar/{codigoDireccion}/{codigoUsuario?}',
    [UsuariosController::class, 'eliminarDireccion'])->name('usuario.direccion.eliminar');

// --------------------  CATEGORIAS ----------------------------
Route::get('/categorias/obtener',
    [CategoriasController::class, 'mostrarTodas'])->name('categorias.obtener');

Route::get('/categorias/productos/obtener/{codigoCategoria?}', //esto obtiene todos los productos de una categoria
    [CategoriasController::class, 'obtenerProductos'])->name('categoria.productos.obtener');


// ------------------- PRODUCTOS ---------------------------
Route::get('/productos/todos/obtener',
    [ProductosController::class, 'obtenerTodos'])->name('productos.obtener.todos');

Route::get('/producto/venta/obtener/{codigoProducto}/{codigoUsuario?}',
    [ProductosController::class, 'obtener'])->name('producto.obtener.venta');

Route::get('/producto/subasta/obtener/{codigoProducto}/{codigoUsuario?}',
    [ProductosController::class, 'obtener'])->name('producto.obtener.subasta');



//--------------------- RESEÑAS -------------------
Route::post('/resenas/agregar/{codigoProducto}',
    [ResenasController::class, 'agregarResenaAProducto'])->name('resena.agregar');

Route::post('/resenas/venta/agregar/{codigoProducto}/{codigoUsuario?}',
    [ResenasController::class, 'agregarResenaAProducto'])->name('resena.venta.agregar');

Route::post('/resenas/subasta/agregar/{codigoProducto}/{codigoUsuario?}',
    [ResenasController::class, 'agregarResenaAProducto'])->name('resena.subasta.agregar');


//--------------------- CARRITO -----------------------
Route::get('/carrito/mostrar/{codigoUsuario?}',
    [CarritosController::class, 'mostrar'])->name('carrito.mostrar');

Route::get('/carrito/actualizar/producto/subasta/{codigoProductoSubastaEnCarrito}/{codigoUsuario?}',
    [CarritosController::class, 'actualizarProductoSubasta'])->name('carrito.actualizar.producto.subasta');

Route::get('/carrito/actualizar/producto/venta/{codigoProductoVentaEnCarrito}/{codigoUsuario?}',
    [CarritosController::class, 'actualizarProductoEnVenta'])->name('carrito.actualizar.producto.venta');

Route::get('/carrito/añadir/unidad/producto/venta/{codigoProductoVentaEnCarrito}/{codigoUsuario?}',
    [CarritosController::class, 'añadirUnidadProductoEnVenta'])->name('carrito.añadir.unidad.producto.venta');

Route::get('/carrito/añadir/unidad/producto/subasta/{codigoProductoSubastaEnCarrito}/{codigoUsuario?}',
    [CarritosController::class, 'añadirUnidadProductoEnSubasta'])->name('carrito.añadir.unidad.producto.subasta');

Route::get('/carrito/añadir/cantidad/producto/subasta/{codigoProductoVentaEnCarrito}/{cantidadProducto}/{codigoUsuario?}',
    [CarritosController::class, 'añadirCantidadProductoEnVenta'])->name('carrito.añadir.cantidad.producto.subasta');

Route::get('/carrito/completar/transaccion/{codigoUsuario?}',
    [CarritosController::class, 'verDetallesTransaccion'])->name('carrito.completar.transaccion');

Route::get('/carrito/confirmar/compra/{totalVenta}/{codigoUsuario?}',
    [CarritosController::class, 'confirmarCompra'])->name('carrito.confirmar.compra');

Route::get('/carrito/producto/venta/eliminar/{codigoProductoVenta}/{codigoUsuario?}',
    [CarritosController::class, 'eliminarProductoVentaCarrito'])->name('carrito.producto.eliminar.venta');

Route::get('/carrito/producto/subasta/eliminar/{codigoProductoSubasta}/{codigoUsuario?}',
    [CarritosController::class, 'eliminarProductoSubastaCarrito'])->name('carrito.producto.eliminar.subasta');

Route::post('/carrito/producto/venta/agregar/{codigoProductoVenta}/{codigoUsuario?}',
    [CarritosController::class, 'agregarProductoCarrito'])->name('carrito.producto.venta.agregar');

Route::get('/carrito/producto/subasta/agregar/{codigoProductoSubasta}/{codigoUsuario?}',
    [CarritosController::class, 'agregarProductoCarrito'])->name('carrito.producto.subasta.agregar');


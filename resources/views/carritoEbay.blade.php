@php
    $contador = 0;
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Ebay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fw-bold">
        <div class="container-fluid">
            <span id="infoUsuarioContenedor" class="dropdown">
                <button id="saludoUsuarioButton" class="navbar-text me-3 btn dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">¡Hola, Usuario!</button>
                <div id="infoUsuario" class="row dropdown-menu p-3 text-body-secondary rounded" style="width: 300px;">
                        <div class="row mb-3">
                            
                            <div class="col-4 me-1 p-0">
                                <a href="#" class="btn p-0">
                                    <img class="img-fluid" src="https://green.excertia.com/wp-content/uploads/2020/04/perfil-empty.png" alt="">
                                </a>
                            </div>
                            <div class="mx-2 mt-2 col p-0">
                                <div id="nombreRealDiv" class="my-2 fw-bold">Usuario</div>
                                <div id="nombreUsuarioDiv" class="p-0 text-body-tertiary">Nombre Usuario</div>
                            </div>

                        </div>
                        <p class="mb-0">
                            <a id="miEbayDatosPersonalesBoton" href="{{ route('usuario.datos') }}" class="col btn">Configuracion de la cuenta</a>
                            <a id="cerrarSesionBoton" href="{{ route('usuario.registro') }}" class="col btn">Cerrar sesion</a>
                        </p>
                </div>
            </span>
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">eBay Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ayuda y contacto</a>
                </li>
                
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item me-2">
                    <a class="nav-link" href="#">
                        <img class="me-2" src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Honduras_flag_300.png" alt="Icono de envío" style="width: 25px; height: 15px;"> Enviar a
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" mx-1 bi bi-globe" viewBox="0 0 16 16">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                        </svg>
                        <span>Español</span>
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a id="listarProductoA" class="nav-link" href="{{ route('usuario.listar') }}">Vender</a>
                </li>
                <li class="nav-item">
                    <a id="listaFavoritosA" class="nav-link" href="{{ route('usuario.favoritos') }}" role="button">
                        Lista de artículos que sigues
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a id="miEbayComprasA" class="nav-link" href="{{ route('usuario.compras') }}">Mi Ebay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="#">
                        <!-- Ícono de campana SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="mx-2 bi bi-bell" viewBox="0 0 15 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="carritoUsuarioA" class="nav-link position-relative" href="{{ route('carrito.mostrar') }}">
                        <!-- Ícono de carrito SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" fill="currentColor" class="bi bi-cart" viewBox="0 0 17 17">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('principal') }}">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png" alt="eBay Logo" style="height: 60px;">
            </a>
            <div class="dropdown me-2">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownCategories" data-bs-toggle="dropdown" aria-expanded="false">
                    Comprar por categoría
                </button>
                <div class="dropdown-menu p-3" style="min-width: 600px;" aria-labelledby="dropdownMenuButton">
                    <!-- Filas y columnas para organizar -->
                    <div class="container">
                        <div id="CategoriasContainer" class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSearch">
                <form id="enviarBusquedaForm" action="{{ route('categoria.productos.obtener') }}" method="GET" class="d-flex w-75 ">
                    <div class="input-group">
                        <span class="input-group-text border-dark bg-white border-end-0 rounded-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </span>
                        <input name="busqueda" type="text" class="form-control border-dark border-start-0" placeholder="Buscar artículos" aria-label="Buscar artículos">
                        <select name="selectCategoria" id="CategoriasSelect" class="form-select border-dark border-start-0 rounded-end" style="max-width: 200px;">
                            <option value="0" selected>Todas las categorías</option>
                            <!-- Opciones de categorías adicionales -->

                        </select>
                        <button id="enviarFormBusqueda" class="btn btn-primary mx-3 rounded-pill" type="submit">
                            <div class="mx-2">Buscar</div>
                        </button>
                    </div>
                </form>
                <a class="nav-link" href="#">Búsqueda avanzada</a>
            </div>
        </div>
    </nav>


    <div class="container my-3">

        <div class="row fw-bold fs-4">
            <div class="col">Carro de compras</div>
        </div>

        <div class="row">
            
            <div class="col-8">
                
                @if ($carritoUsuario->isNotEmpty())
                
                    @foreach ($carritoUsuario as $productosCarrito)

                        @if (!is_null($productosCarrito->TBL_PRODUCTOS_EN_VENTA))
                        
                        @php
                            $productosEnVentaCarrito = $productosCarrito->TBL_PRODUCTOS_EN_VENTA->TBL_PRODUCTOS;
                            $contador += 1;
                        @endphp
                        <div class="border rounded p-3 mb-3">
                            <div class="row">
                                <div class="col-9 fw-bold link-dark">{{ $productosEnVentaCarrito->marca }}</div>
                                <div class="col text-center">Precio de comprar ahora <br>(unidad)</div>
                            </div>
                            <div class="row my-3">
                                <div class="col-3">
                                    <img src="{{ $productosEnVentaCarrito->foto }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-3">
                                    <a href="{{ route('producto.obtener.venta', $productosCarrito->TBL_PRODUCTOS_EN_VENTA->codigo_producto_en_venta) }}" class="link-dark link-offset-2 link-underline-opacity-70 link-underline-opacity-100-hover">
                                        {{ $productosEnVentaCarrito->marca }} {{ $productosEnVentaCarrito->nombre_producto }} {{ $productosEnVentaCarrito->modelo }}
                                    </a>
                                    <div class="mt-2">Estado - <strong>{{ $productosEnVentaCarrito->TBL_CONDICION_PRODUCTOS->descripcion }}</strong></div>
                                    <div class="mt-2 "> <span class="fw-bold">Articulo en venta</span></div>
                                </div>
                                <div class="col-1">Cantidad</div>
                                <div class="col-2 me-3">
                                    
                                    <div id="alertMessage{{$contador}}" class="text-danger text-center mt-3 d-none">Has alcanzado el límite</div>
                                    
                                    

                                        @if ($productosCarrito->TBL_PRODUCTOS_EN_VENTA->cantidad > 0)
                                        
                                            @if ($productosCarrito->cantidad_producto > $productosCarrito->TBL_PRODUCTOS_EN_VENTA->cantidad)
                                            
                                                <a id="actualizarCarritoEnVentaA" href="{{ route('carrito.actualizar.producto.venta', $productosCarrito->codigo_producto_en_venta) }}" class="visually-hidden"></a>

                                            @else

                                                @if ($productosCarrito->cantidad_producto == 0)
                                                
                                                    <a id="añadirUnArticuloEnVentaA" href="{{ route('carrito.añadir.unidad.producto.venta', $productosCarrito->codigo_producto_en_venta) }}" class="visually-hidden"></a>

                                                @else

                                                    <select id="selectProductosEnVenta" class="form-select" aria-label="Default select example" >
                                                        <option
                                                            value="{{ route('carrito.añadir.cantidad.producto.subasta', ['codigoProductoVentaEnCarrito' => $productosCarrito->codigo_producto_en_venta, 'cantidadProducto' => $productosCarrito->cantidad_producto]) }}"
                                                            selected> 
                                                                {{ $productosCarrito->cantidad_producto }} 
                                                        </option>
                                                        @for ($i = 1; $i < $productosCarrito->cantidad_producto; $i++)
                                                            <option id="productoVenta{{ $productosCarrito->codigo_producto_en_venta }}Valor{{ $i }}" 
                                                                value="{{ route('carrito.añadir.cantidad.producto.subasta', ['codigoProductoVentaEnCarrito' => $productosCarrito->codigo_producto_en_venta, 'cantidadProducto' => $i]) }}"> 
                                                                    {{ $i }} 
                                                            </option>
                                                        @endfor
                                                        @for ($i = $productosCarrito->cantidad_producto; $i < $productosCarrito->TBL_PRODUCTOS_EN_VENTA->cantidad; $i++)
                                                            <option id="productoVenta{{ $productosCarrito->codigo_producto_en_venta }}Valor{{ $i+1 }}" 
                                                                value="{{ route('carrito.añadir.cantidad.producto.subasta', ['codigoProductoVentaEnCarrito' => $productosCarrito->codigo_producto_en_venta, 'cantidadProducto' => $i+1]) }}"> 
                                                                    {{ $i+1 }} 
                                                            </option>
                                                        @endfor
                                                    
                                                    </select>

                                                @endif

                                            @endif

                                            

                                        @else

                                            @if ($productosCarrito->cantidad_producto != $productosCarrito->TBL_PRODUCTOS_EN_VENTA->cantidad)

                                                <a id="actualizarCarritoEnVentaA" href="{{ route('carrito.actualizar.producto.venta', $productosCarrito->codigo_producto_en_venta) }}" class="visually-hidden"></a>

                                            @endif

                                            <select class="form-select" aria-label="Default select example" >
                                                <option id="noDisponibleOption" selected> NO DISPONIBLE </option>
                                            </select>
                                        @endif
                                        
                                    

                                    
                                    
                                </div>
                                
                                <div class="col fw-bold fs-5 text-center">L. {{ $productosEnVentaCarrito->precio }}.00</div>
                            </div>
                            <div class="row mx-1">
                                <div class="col-10"></div>
                                <a id="eliminarProductoVentaA" href="{{ route('carrito.producto.eliminar.venta', $productosCarrito->codigo_producto_en_venta) }}" class="btn btn-danger col-2 text-center p-1">Eliminar</a>
                            </div>
                        </div>
                    
                        @endif

                    @endforeach

                    @foreach ($carritoUsuario as $productosCarrito)

                        @if (!is_null($productosCarrito->TBL_SUBASTAS))
                            
                        
                        @php
                            $productosSubastaCarrito = $productosCarrito->TBL_SUBASTAS->TBL_PRODUCTOS;
                            $contador += 1;
                        @endphp
                        <div class="border rounded p-3 mb-3">
                            <div class="row">
                                <div class="col-9 fw-bold link-dark">{{ $productosSubastaCarrito->marca }}</div>
                                <div class="col text-end text-center">Precio de comprar ahora <br>(todos)</div>
                            </div>
                            <div class="row my-3">
                                <div class="col-3">
                                    <img src="{{ $productosSubastaCarrito->foto }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-3">
                                    <a href="{{ route('producto.obtener.subasta', $productosCarrito->TBL_SUBASTAS->codigo_subasta) }}" class="link-dark link-offset-2 link-underline-opacity-70 link-underline-opacity-100-hover">
                                        {{ $productosSubastaCarrito->marca }} {{ $productosSubastaCarrito->nombre_producto }} {{ $productosSubastaCarrito->modelo }}
                                    </a>
                                    <div class="mt-2">Estado - <strong>{{ $productosSubastaCarrito->TBL_CONDICION_PRODUCTOS->descripcion }}</strong></div>
                                    <div class="mt-2 "> <span class="fw-bold">Articulo en subasta</span> <br> <span>Al comprar aceptas el precio de compra ahora de todos los articulos en subasta</span> </div>
                                </div>
                                <div class="col-1">Cantidad</div>
                                <div class="col-2 me-3">
                                    
                                    <div id="alertMessage{{$contador}}" class="text-danger text-center mt-3 d-none">Has alcanzado el límite</div>
                                    
                                        @if ($productosCarrito->TBL_SUBASTAS->cantidad > 0)
                                        
                                            @if ($productosCarrito->cantidad_producto > $productosCarrito->TBL_SUBASTAS->cantidad)
                                            
                                                <a id="actualizarCarritoSubastaA" href="{{ route('carrito.actualizar.producto.subasta', $productosCarrito->codigo_subasta) }}" class="visually-hidden"></a>

                                            @else

                                                @if ($productosCarrito->cantidad_producto == 0)
                                                    <a id="añadirUnArticuloEnSubastaA" href="{{ route('carrito.añadir.unidad.producto.subasta', $productosCarrito->codigo_producto_en_venta) }}" class="visually-hidden"></a>
                                                @else
                                                    <select class="form-select" aria-label="Default select example" >
                                                        <option selected> {{ $productosCarrito->cantidad_producto }} </option>
                                                    </select>
                                                @endif
                                            @endif
                                            
                                        @else

                                            <select class="form-select" aria-label="Default select example" >
                                                <option id="noDisponibleOption" selected> NO DISPONIBLE </option>
                                            </select>

                                        @endif
                                        
                                    

                                    
                                    
                                </div>
                                
                                <div class="col fw-bold fs-5 text-center">L. {{ $productosSubastaCarrito->precio * $productosCarrito->TBL_SUBASTAS->cantidad }}.00</div>
                            </div>
                            <div class="row mx-1">
                                <div class="col-10"></div>
                                <a class="btn btn-danger col-2 text-center p-1">Eliminar</a>
                            </div>
                        </div>
                    
                        @endif

                    @endforeach

                @endif

                <div class="border rounded p-3 mb-3">
                    <div class="row">
                        <a href="#" class="col-6 fw-bold link-dark">Sony</a>
                        <div class="col text-end">Precio de comprar ahora</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">
                            <img src="https://cdn.mos.cms.futurecdn.net/HkdMToxijoHfz4JwUgfh3G.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-3">
                            <a href="#" class="row link-dark link-offset-2 link-underline-opacity-70 link-underline-opacity-100-hover">
                                Sony PlayStation 5
                            </a>
                            <div class="row mt-2">Nuevo - Articulo nuevo</div>
                        </div>
                        <div class="col-1">Cantidad</div>
                        <div class="col-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected> 1 </option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        
                        <div class="col fw-bold fs-5">US $500.00</div>
                    </div>
                    <div class="row mx-1">
                        <div class="col-10"></div>
                        <a class="btn btn-danger col-2 text-center p-1">Eliminar</a>
                    </div>
                </div>
                

                <div class="border rounded p-3 mb-3">
                    <div class="row">
                        <a href="#" class="col-6 fw-bold link-dark">Sony</a>
                        <div class="col text-end">Solicitar envio combinado</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">
                            <img src="https://cdn.mos.cms.futurecdn.net/HkdMToxijoHfz4JwUgfh3G.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-3">
                            <a href="#" class="row link-dark link-offset-2 link-underline-opacity-70 link-underline-opacity-100-hover">
                                Sony PlayStation 5
                            </a>
                            <div class="row mt-2">Nuevo - Articulo nuevo</div>
                        </div>
                        <div class="col-1">Cantidad</div>
                        <div class="col-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected> 1 </option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        
                        <div class="col fw-bold fs-5">US $500.00</div>
                    </div>
                    <div class="row mx-1">
                        <div class="col-10"></div>
                        <a class="btn btn-danger col-2 text-center p-1">Eliminar</a>
                    </div>
                </div>
            </div>
            

            @php
                $subtotal = 0;
                $cantidadArticulos = 0;
            @endphp
            @foreach ($carritoUsuario as $productosCarrito)
                @if (!is_null($productosCarrito->TBL_PRODUCTOS_EN_VENTA))
                    @php
                        $subtotal += $productosCarrito->TBL_PRODUCTOS_EN_VENTA->TBL_PRODUCTOS->precio * $productosCarrito->cantidad_producto;
                        $cantidadArticulos += $productosCarrito->cantidad_producto;
                    @endphp
                
                @else

                    @if (!is_null($productosCarrito->TBL_SUBASTAS))
                    
                        @php
                            $subtotal += $productosCarrito->TBL_SUBASTAS->TBL_PRODUCTOS->precio * $productosCarrito->cantidad_producto;
                            $cantidadArticulos += $productosCarrito->cantidad_producto;
                        @endphp

                    @endif
                
                @endif
                
            @endforeach


            <div class="mx-2 col align-self-start border rounded p-1">
                
                
                <div class="mx-3">
                        <div class="row mt-2"> 
                            <div class="col mb-2">
                                Articulos ({{ $cantidadArticulos  }})
                            </div>
                            <div class="col text-end">
                                L. {{ $subtotal }}
                            </div>
                        </div>
                        
                    <div class="row border-bottom mx-1"></div>
                    <div class="row mt-2 fw-bold fs-3">
                        <div class="col">Subtotal</div>
                        <div class="col text-end">L. <span id="subtotalSpan">{{ $subtotal }}</span> </div>
                    </div>
                    <div class="row">
                        <a href="{{ route('carrito.completar.transaccion') }}" id="completarTransaccionA" class="col mx-4 my-3 btn btn-primary">Completar la transacción</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        
        let subtotalSpan = document.getElementById('subtotalSpan');
        
        if(subtotalSpan.innerText == '0'){
            let completarTransaccionA = document.getElementById('completarTransaccionA');
            completarTransaccionA.classList.add('disabled');
        }

        let noDisponibleOption = document.getElementById('noDisponibleOption');
        if(noDisponibleOption){
            let completarTransaccionA = document.getElementById('completarTransaccionA');
            completarTransaccionA.classList.add('disabled');
        }

        if(localStorage.getItem('codigo_usuario')){
            let completarTransaccionA = document.getElementById('completarTransaccionA');
            completarTransaccionA.href += `/${localStorage.getItem('codigo_usuario')}`;
        }
        
    </script>

    <script>
        // Pasamos las rutas generadas por Laravel a una variable global
        window.laravelRoutes = {
            obtenerCategorias: "{{ route('categorias.obtener') }}",
            rutaProductosEnCategoria: "{{ route('categoria.productos.obtener') }}",
            registro: "{{ route('usuario.registro') }}"
            };
    </script>
    <script src=" {{ asset ('/assets/JavaScript/obtenerCategorias.js') }} "></script>
    <script>
        let enviarBusquedaForm = document.getElementById('enviarBusquedaForm');
        let CategoriasSelect = document.getElementById('CategoriasSelect');
        let enviarFormBusqueda = document.getElementById('enviarFormBusqueda');

        enviarBusquedaForm.action += `/${CategoriasSelect.selectedIndex}`

        CategoriasSelect.addEventListener('change',function(event){
            let selectedOption = event.target.value;
    
            enviarBusquedaForm.action = enviarBusquedaForm.action.replace(/\/\d+$/, " ");
            
            if(!isNaN(selectedOption)){
                //console.log(selectedOption);
                enviarBusquedaForm.action += `/${selectedOption}`;
            }else{
                enviarBusquedaForm.action += `/${selectedOption}`;
            }

        })

    </script>
    <script src=" {{ asset ('/assets/JavaScript/obtenerUsuario.js') }} "></script>
    <script>
        let actualizarCarritoSubastaA = document.querySelector('#actualizarCarritoSubastaA');
        let actualizarCarritoEnVentaA = document.querySelector('#actualizarCarritoEnVentaA');
        let añadirUnArticuloEnVentaA = document.querySelector('#añadirUnArticuloEnVentaA');
        if(actualizarCarritoSubastaA){
            if(localStorage.getItem('codigo_usuario')){
                actualizarCarritoSubastaA.href += `/${localStorage.getItem('codigo_usuario')}`;
            }
            actualizarCarritoSubastaA.click();
        }
        if(actualizarCarritoEnVentaA){
            if(localStorage.getItem('codigo_usuario')){
                actualizarCarritoEnVentaA.href += `/${localStorage.getItem('codigo_usuario')}`;
            }
            actualizarCarritoEnVentaA.click();
        }
        if(añadirUnArticuloEnVentaA){
            if(localStorage.getItem('codigo_usuario')){
                añadirUnArticuloEnVentaA.href += `/${localStorage.getItem('codigo_usuario')}`;
            }
            añadirUnArticuloEnVentaA.click();
        }

        let selectProductosEnVentaArreglo = document.querySelectorAll('#selectProductosEnVenta');

        // Agrega un listener a cada select
        if(selectProductosEnVentaArreglo && localStorage.getItem('codigo_usuario')){
            selectProductosEnVentaArreglo.forEach(selectProductosEnVenta => {
                selectProductosEnVenta.addEventListener('change', function() {
                    const ruta = `${this.value}/${localStorage.getItem('codigo_usuario')}`;
                    //this.value = `${this.value}/${localStorage.getItem('codigo_usuario')}`;
                    if (ruta) {
                        window.location.href = ruta; 
                    }
                });
            });
        }

        let eliminarProductoVentaA = document.querySelector('#eliminarProductoVentaA');
        if(localStorage.getItem('codigo_usuario')){
            eliminarProductoVentaA.href += `/${localStorage.getItem('codigo_usuario')}`;
        }



    </script>

</body>
</html>
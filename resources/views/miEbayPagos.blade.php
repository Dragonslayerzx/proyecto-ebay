<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Ebay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        #Opciones_Mi_Ebay > .active{
            background-color:rgb(219, 219, 219);
            border-color: rgb(255, 255, 255);
            color: black;
        }
    </style>

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

        <div class="row fw-bold fs-1 mb-3">
            <div class="col">Mi eBay</div>
        </div>
        <div class="row">
            <div class="col">
                <nav aria-label="...">
                    <ul class="pagination pagination-md">
                    <li class="page-item" aria-current="page">
                        <a id="usuarioComprasA" class="page-link fs-5" href="{{ route('usuario.compras') }}">Actividad</a>
                    </li>
                    <li class="page-item"><a class="page-link fs-5" href="#">Mensajes</a></li>
                    <li class="page-item active">
                        <span class="page-link fs-5">Cuenta</span>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row border bg-black my-3"></div>

        <div class="row">
            <div class="col-3 my-2 mx-1">
                <!--(div.row.my-2.mx-2>div.col>a.btn.btn-outline-dark{Resumen})*13-->
                
                <div id="Opciones_Mi_Ebay" class="list-group list-group-flush">
                        <div class="dropdown">
                            <a href="#" class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Datos personales y privacidad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="datosUsuarioA" href="{{ route('usuario.datos') }}" class="dropdown-item">Datos personales</a></li>
                                <li><a class="dropdown-item" href="#">Inicio de sesión y seguridad</a></li>
                                <li><a id="usuarioDireccionesA" class="dropdown-item" href="{{ route('usuario.direcciones.mostrar') }}">Direcciones</a></li>
                                <li><a class="dropdown-item" href="#">Comentarios</a></li>
                                <li><a class="dropdown-item" href="#">Centro de resoluciones</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="list-group-item list-group-item-action dropdown-toggle active" data-bs-toggle="dropdown" aria-expanded="false">
                                Informacion sobre el pago
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="usuarioPagosA" class="dropdown-item active" href="{{ route('usuario.datos.pagos') }}">Pagos</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Preferencias de la cuenta
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Permisos</a></li>
                                <li><a class="dropdown-item" href="#">Preferencias de publicidad</a></li>
                                <li><a class="dropdown-item" href="#">Preferencias de comunicacion</a></li>
                            </ul>
                        </div>
                </div>

            </div>
            <div class="col">

            <div class="row mb-5 fs-1">
                <div class="col-6 fw-bold">
                    Pagos
                </div>
                <div class="col-1"></div>
                <button class="col btn btn-white align-end text-center fs-5" data-bs-toggle="modal" data-bs-target="#modalAgregarTarjeta">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                    </svg>
                    </span>
                    <br><span>Agregar Tarjeta de Credito o Debito</span>
                </button>
                <button class="col btn btn-white align-end text-center fs-5" data-bs-toggle="modal" data-bs-target="#modalAgregarServicioPago">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                    </svg>
                    </span>
                    <br><span>Agregar Servicio de Pago</span>
                </button>
            </div>

            <!-- Empieza -->
            @if ($usuario)
            
            <div class="my-3 row border"></div>
            
            <div>

                @php
                    $contador = 0;
                @endphp

                @foreach ($usuario->TBL_TARJETAS as $tarjetaUsuario)
                
                    <div class="row my-5">
                        @if ($contador == 0)
                            <div class="col-4 fs-5 fw-semibold">Informacion de tarjetas</div>
                        @else
                            <div class="col-4 fs-5 fw-semibold"></div>
                        @endif

                        @php
                            $contador++;
                        @endphp
                        <div class="col-4 fs-5">
                            <div class="text-body-secondary mb-2">Tarjeta {{$contador}}</div>
                            <div>Numero:  <span class="fw-semibold">{{$tarjetaUsuario->numero_tarjeta}}</span> </div>
                            <div>Fecha Vencimiento: <span class="fw-semibold">{{date('d-m-Y', strtotime($tarjetaUsuario->fecha_vencimiento))}}</span> </div>
                            <div>CVV: <span class="fw-semibold">{{$tarjetaUsuario->cvv}}</span> </div>
                            <div>Titular: <span class="fw-semibold">{{$tarjetaUsuario->titular}}</span> </div>

                        </div>
                        <div class="col-2"></div>
                        <a id="eliminarTarjetaA" href="{{ route('usuario.tarjeta.eliminar', $tarjetaUsuario->codigo_tarjeta) }}" class="col-2 btn text-danger fs-5">Eliminar</a>

                    </div>

                @endforeach

                <div class="my-3 row border"></div>

            </div>

            <div>

                @php
                    $contadorApoyo = 0;
                @endphp

                @foreach ($usuario->TBL_SERVICIOS_X_USUARIOS as $servicioPagoUsuario)
                
                    <div class="row my-5">
                        
                        @if ($contadorApoyo == 0)
                            <div class="col-4 fs-5 fw-semibold">Otros metodos de pago agregados</div>
                        @else
                            <div class="col-4 fs-5 fw-semibold"></div>
                        @endif

                        @php
                            $contadorApoyo++;
                        @endphp

                        <div class="col-4 fs-4 fw-semibold">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                    <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"/>
                                </svg>
                            </span>
                            <span>{{ $servicioPagoUsuario->TBL_SERVICIOS_PAGOS->nombre_servicio }}</span>
                        </div>

                        <div class="col-2"></div>
                        <a id="eliminarServicioPagoA" href="{{ route('usuario.servicio.pago.eliminar', $servicioPagoUsuario->codigo_servicio) }}" class="col-2 btn text-danger fs-5">Eliminar</a>

                    </div>

                @endforeach

                <div class="my-3 row border"></div>

            </div>

            @endif

            
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalAgregarTarjeta" tabindex="-1" aria-labelledby="modalAgregarTarjetaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Agregar una tarjeta</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <form id="nuevaTarjetaForm" action="{{ route('usuario.tarjeta.agregar') }}" method="POST">
                @csrf
                    <div class="modal-body">
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="numeroTarjeta" class="form-label">Numero tarjeta</label>
                                        <input name="numeroTarjeta" type="text" class="form-control" id="numeroTarjeta" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaVencimiento" class="form-label">Fecha vencimiento</label>
                                        <input name="fechaVencimiento" type="date" class="form-control" id="fechaVencimiento" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input name="nombreTitular" type="text" class="form-control" id="nombre" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1 p-4">
                                        <span class="me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1"/>
                                            </svg>
                                        </span>
                                        <span class="me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                                                <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5z"/>
                                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1m-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1"/>
                                            </svg>
                                        </span>
                                        <span class="me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cvv" class="form-label">Codigo de seguridad</label>
                                        <input name="cvv" type="password" class="form-control" id="cvv" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Apellido</label>
                                        <input name="apellidoTitular" type="text" class="form-control" id="apellido" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Tarjeta</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalAgregarServicioPago" tabindex="-1" aria-labelledby="modalAgregarServicioPagoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Agregar una tarjeta</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <form id="nuevoServicioPagoForm" action="{{ route('usuario.servicio.pago.agregar') }}" method="POST">
                @csrf
                    <div class="modal-body">
                        
                        @foreach ($serviciosPagos as $servicioPagoIndividual)

                            <div class="form-check">
                                <input name="codigoServicioPago" value="{{ $servicioPagoIndividual->codigo_servicio }}" id="servicioPagoInput" class="form-check-input" type="radio" required>
                                    {{ $servicioPagoIndividual->nombre_servicio }}
                                </input>
                            </div>

                        @endforeach

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Servicio</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>


    <footer class="border-top py-4" >
        <div class="text-center">
            <p class="text-muted"><small>Copyright © 1995-2024 eBay Inc. Todos los derechos reservados. Condiciones de uso, Aviso de privacidad, Condiciones de uso de pagos, cookies y AdChoice	
            </small></p>
        </div>
    </footer>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>

        let nuevaTarjetaForm = document.querySelector('#nuevaTarjetaForm');
        let nuevoServicioPagoForm = document.querySelector('#nuevoServicioPagoForm');
        let eliminarServicioPagoArrayA = document.querySelectorAll('#eliminarServicioPagoA');
        let eliminarTarjetaArrayA = document.querySelectorAll('#eliminarTarjetaA');

        if(localStorage.getItem('codigo_usuario')){
            if(nuevaTarjetaForm){
                nuevaTarjetaForm.action += `/${localStorage.getItem('codigo_usuario')}`;
            }
            if(nuevoServicioPagoForm){
                nuevoServicioPagoForm.action += `/${localStorage.getItem('codigo_usuario')}`;
            }
            if(eliminarServicioPagoArrayA){
                eliminarServicioPagoArrayA.forEach(eliminarServicioPagoA => {
                    eliminarServicioPagoA.href += `/${localStorage.getItem('codigo_usuario')}`;
                });
            }
            if(eliminarTarjetaArrayA){
                eliminarTarjetaArrayA.forEach(eliminarTarjetaA => {
                    eliminarTarjetaA.href += `/${localStorage.getItem('codigo_usuario')}`;
                });
            }
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
    <script src=" {{ asset ('/assets/JavaScript/redirectsDatosPersonalesMiEbay.js') }} "></script>


</body>
</html>

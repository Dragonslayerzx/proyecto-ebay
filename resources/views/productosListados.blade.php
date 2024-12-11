<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eBay - Listados</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .inactive {
            color: gray;
            font-style: italic;
            }
            .product-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            }

            #configurar{


                background-color: rgb(44, 159, 44);
            }
            .modal-product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
            border-radius: 5px;
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


        <div class="container mt-5">

            <div class="row">
                <h1 class="mb-4 col-2">
                    <a id="mostrarProductosActivosA" href="{{ route('usuario.producto.mostrar.activos') }}" class="btn btn-lg btn-outline-dark fs-5"> 
                        <
                    </a>
                </h1>
                <h1 class="mb-4 col-8 text-center">
                    <span>
                        eBay Listados
                    </span>
                </h1>
            </div>

        @if($usuario->TBL_PRODUCTOS)

        @php
            $productosDeUsuario = $usuario->TBL_PRODUCTOS;
        @endphp

            <!-- Product List Section -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">Products</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Imagen</th>
                            <th>Nombre del Producto</th>
                            <th>Estado</th>
                            <th>Accion</th>
                            <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($productosDeUsuario as $detalleProductoUsuario)
                            
                                @if (true || $detalleProductoUsuario->TBL_PRODUCTOS_EN_VENTA->isEmpty() && $detalleProductoUsuario->TBL_SUBASTAS->isEmpty())
                                
                                @php
                                    $cantidadEnVeta = 0;
                                    $cantidadEnSubasta = 0;
                                    if($detalleProductoUsuario->TBL_PRODUCTOS_EN_VENTA->isNotEmpty()){
                                        foreach ($detalleProductoUsuario->TBL_PRODUCTOS_EN_VENTA as $detalleVentaProductoUsuario) {
                                            $cantidadEnVeta += $detalleVentaProductoUsuario->cantidad;
                                        }
                                    }
                                    if($detalleProductoUsuario->TBL_SUBASTAS->isNotEmpty()){
                                        foreach ($detalleProductoUsuario->TBL_SUBASTAS as $detalleSubastaProductoUsuario) {
                                            $cantidadEnSubasta += $detalleSubastaProductoUsuario->cantidad;
                                        }
                                    }
                                    $cantidadTotalDisponible = $detalleProductoUsuario->cantidad_disponible - ($cantidadEnVeta + $cantidadEnSubasta);
                                @endphp

                                <tr>
                                    <td>
                                        <img src="{{ $detalleProductoUsuario->foto }}" alt="Product Image" class="product-image">
                                    </td>
                                    <td>{{ $detalleProductoUsuario->nombre_producto }}</td>
                                    <td><span class="inactive">Inactivo</span></td>
                                    <td>
                                        <button id="configurar" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#actionModal" onclick="setProductDetails('{{ $detalleProductoUsuario->nombre_producto }} {{ $detalleProductoUsuario->marca }} {{ $detalleProductoUsuario->modelo }}', '{{ $detalleProductoUsuario->foto }}', '{{ route('usuario.producto.activar.subasta', $detalleProductoUsuario->codigo_producto) }}', '{{ $cantidadTotalDisponible }}', '{{ $detalleProductoUsuario->precio }}' )">
                                            Configurar Subasta
                                        </button>
                                    </td>
                                    <td>
                                        <button id="configurar" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#actionModalVenta" onclick="setVentaDetails('{{ $detalleProductoUsuario->nombre_producto }} {{ $detalleProductoUsuario->marca }} {{ $detalleProductoUsuario->modelo }}', '{{ $detalleProductoUsuario->foto }}', '{{ route('usuario.producto.activar.venta', $detalleProductoUsuario->codigo_producto) }}', '{{ $cantidadTotalDisponible }}', '{{ $detalleProductoUsuario->precio }}' )">
                                            Subir producto
                                        </button>
                                    </td>
                                </tr>

                                @endif

                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Ventana Modal Subasta -->
            <div class="modal fade" id="actionModal" tabindex="-1" aria-labelledby="actionModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="actionModalLabel">Configurar Subasta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <img id="modalProductImage" src="" alt="Product Image" class="modal-product-image">
                                <h6 id="modalProductName" class="mt-2"></h6>
                            </div>
                            <form action="" id="modalProductoForm" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="startDate" class="form-label">Fechas inicio</label>
                                    <input name="fechaInicio" type="datetime-local" class="form-control" id="startDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="endDate" class="form-label">Fecha finalizacion</label>
                                    <input name="fechaFin" type="datetime-local" class="form-control" id="endDate" required>
                                </div>
                                <div class="mb-3">
                                    <label id="cantidadMaximaSubastaLabel" for="quantity" class="form-label">Cantidad</label>
                                    <input name="cantidad" min="1" type="number" class="form-control" id="cantidadMaximaSubastaInput" required>
                                </div>
                                <div class="mb-3">
                                    <label for="startingBid" class="form-label">Oferta inicial</label>
                                    <input name="precioInicio" min="1" type="number" class="form-control" id="startingBid" required>
                                </div>
                                <div class="mb-3">
                                    <label for="precioComprarAhoraSubasta" class="form-label">Precio comprar ahora</label>
                                    <input value="" type="number" class="form-control" id="precioComprarAhoraSubasta" readonly>
                                </div>
                                <button id="subirSubastaBoton" type="submit" class="btn btn-primary w-100">Subir Subasta</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ventana Modal Subir Producto a Venta -->
        <div class="modal fade" id="actionModalVenta" tabindex="-1" aria-labelledby="actionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="actionModalLabel">Subir Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="modalProductImage2" src="" alt="Product Image" class="modal-product-image">
                            <h6 id="modalProductName2" class="mt-2"></h6>
                        </div>
                        <form action="" id="modalProductoForm2" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label id="cantidadMaximaVentaLabel" for="quantity" class="form-label">Cantidad</label>
                                <input name="cantidad" id="cantidadMaximaVentaInput" min="1" type="number" class="form-control" id="quantity" required>
                            </div>
                            <div class="mb-3">
                                <label for="precioCompraProducto" class="form-label">Precio</label>
                                <input id="precioCompraProducto" value="" type="number" class="form-control" readonly>
                            </div>
                            <button id="subirVentaBoton" type="submit" class="btn btn-primary w-100">Subir Venta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endif

        <!-- </div> -->


    <!-- Footer -->
    <footer class="bg-light text-muted">
        <div class="container py-4">
            <div class="row">
                <!-- Columna de enlaces -->
                <div class="col-md-8">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-decoration-none text-muted">Acerca de eBay</a></li>
                        <li class="list-inline-item"><a href="#" class="text-decoration-none text-muted">Aviso de privacidad</a></li>
                        <li class="list-inline-item"><a href="#" class="text-decoration-none text-muted">Condiciones de uso</a></li>
                        <li class="list-inline-item"><a href="#" class="text-decoration-none text-muted">Contacto</a></li>
                        <li class="list-inline-item"><a href="#" class="text-decoration-none text-muted">Mapa del sitio</a></li>
                    </ul>
                </div>
                <!-- Columna de derechos reservados -->
                <div class="col-md-4 text-md-end text-center">
                    <p class="mb-0">&copy; 2024 eBay Inc. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
        // Detalle producto modal

        let codigoUsuario = localStorage.getItem('codigo_usuario');

        function setMinDatetime() {
            const startDate = document.getElementById('startDate');
            const endDate = document.getElementById('endDate');
            const now = new Date();

            // Formatear fecha y hora: YYYY-MM-DDTHH:MM
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');

            // Asignar el valor mínimo al input
            startDate.min = `${year}-${month}-${day}T${hours}:${minutes}`;
            endDate.min = `${year}-${month}-${day}T${hours}:${minutes}`;
        }

        function setProductDetails(name, imageUrl, ruta, cantidadDisponible, precio) { //subasta
            document.getElementById('modalProductName').textContent = name;
            document.getElementById('modalProductImage').src = imageUrl;
            document.getElementById('precioComprarAhoraSubasta').value = precio;


            if(cantidadDisponible > 0){
                document.getElementById('cantidadMaximaSubastaLabel').innerText = `Cantidad (maximo de ${cantidadDisponible} unidades)`;
                document.getElementById('cantidadMaximaSubastaInput').max = cantidadDisponible;
            }else{
                document.getElementById('cantidadMaximaSubastaLabel').innerText = "UNIDADES AGOTADAS";
                document.getElementById('cantidadMaximaSubastaInput').min = 0;
                document.getElementById('cantidadMaximaSubastaInput').max = 0;
                document.getElementById('subirSubastaBoton').classList.add('disabled');
            }
            
            setMinDatetime();

            if(codigoUsuario){
                let rutaAtributos = ruta;
                rutaAtributos += `/${codigoUsuario}`;
                document.getElementById('modalProductoForm').action = rutaAtributos;
            }
            //console.log(document.getElementById('modalProductoForm'));
        }

        function setVentaDetails(name2, imageUrl2, ruta2, cantidadDisponible2, precio2) { //ventaDirecta
            document.getElementById('modalProductName2').textContent = name2;
            document.getElementById('modalProductImage2').src = imageUrl2;
            document.getElementById('precioCompraProducto').value = precio2;

            if(cantidadDisponible2 > 0){
                document.getElementById('cantidadMaximaVentaLabel').innerText = `Cantidad (maximo de ${cantidadDisponible2} unidades)`;
                document.getElementById('cantidadMaximaVentaInput').max = cantidadDisponible2;
            }else{
                document.getElementById('cantidadMaximaVentaLabel').innerText = "UNIDADES AGOTADAS";
                document.getElementById('cantidadMaximaVentaInput').min = 0;
                document.getElementById('cantidadMaximaVentaInput').max = 0;
                document.getElementById('subirVentaBoton').classList.add('disabled');
            }

            if(codigoUsuario){
                let rutaAtributos = ruta2;
                rutaAtributos += `/${codigoUsuario}`;
                document.getElementById('modalProductoForm').action = rutaAtributos;
            }
        }
    </script>
    <script src=" {{ asset ('/assets/JavaScript/redirectsMiEbay.js') }} "></script>

    </body>
</html>

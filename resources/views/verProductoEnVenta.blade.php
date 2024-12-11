<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBay - Producto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .small-image {
            width: 100px;
            height: 100px;
            border-radius: 20px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .large-image {
            
            width: 100%;
            height: 100%;
            max-height: 400px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 20px;
        }

        .left-column {
            max-width: 120px;
        }

        #seccion-producto h4{

            padding-right: 37%;
            max-width: 100%;
            color: gray;
        }

        #seccion-producto span{

            color: rgb(242, 13, 13);
        }

        #caracteristicas .vendedor{

            
            margin-top: 6%;
            margin-bottom: 8%;

        }

        .vendedor{

            height: 85px;
            max-height: 100%;
            border-top: 1px solid;
            padding-top: 15px;
            justify-content: center;
            border-bottom: 1px solid;
            border-color: #ddd;
    
        }

        .vendedor a{ 
            
           color: black;
           font-size: 0.8rem;
        }

        #caracteristicas .precio-venta{

            color: rgb(109, 99, 99);
            font-size: 0.9rem;
        }

        #caracteristicas .precio-venta span{

            color: rgb(234, 13, 13);
        }

        #caracteristicas .estado{

            color: black;
            font-size: 0.9rem;
        }

        #caracteristicas .estado-descripcion{

            font-size: 0.9rem;
            color: black;
        }
        


        .vendedor .nombre-tienda{
            
            margin-bottom: 4%;
            font-size: 0.9rem;
            
        }


        #botones-compra button{

            border-radius: 40px;
            width: 400px;
            max-width: 100%;
            height: 50px;
            border: 1px solid;
            margin-top: 5%;
            border-color: rgb(3, 3, 251);
            font-size: 0.9rem;
            padding-top: 1%;
            color: blue;
        }

        #botones-compra #comprar{

            
            color: white;
        }

        
        
        footer {
            border-top: 1px solid #ddd;
        }

        footer a:hover {
            color: #0d6efd;
            text-decoration: underline;
        }

        footer p {
            font-size: 0.9rem;
            color: #6c757d;
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



    @if ($productoEnVenta)
    
    <div class="container my-5" id="seccion-producto">
        <!-- Product Header -->
        <h4 class="text-center mb-4"> &#9992 <span>ENVIO GRATUITO DE 2 DIAS</span> EN PEDIDOS SUPERIORES A $99</h4>

        <!-- Product Grid -->
        <div class="row">

            @php
                $productoEnVentaDatos = $productoEnVenta->TBL_PRODUCTOS;
            @endphp

            <div class="col-md-6">
                <img src="{{ $productoEnVentaDatos->foto }}" class="d-block w-100 main-image" alt="Main Image 1">
            </div>

            <!-- Product Details -->
            <div class="col-md-4" id="caracteristicas">
                <h1>{{ $productoEnVentaDatos->nombre_producto }} {{ $productoEnVentaDatos->marca }} {{ $productoEnVentaDatos->modelo }}</h1>
                <div class="vendedor">
                    <a class="nombre-tienda" href=""><Strong>{{ $productoEnVentaDatos->TBL_USUARIOS->nombre_usuario }}</Strong></a><br>
                    <a href="">Otros articulos del vendedor</a>
                    <a href="">Contactar con el vendedor</a>
                </div>
                
                <div class="text-black mb-2 fs-5">
                    Disponibles:
                    <span id="cantidadEnVentaSpan">{{ $productoEnVenta->cantidad }} </span>
                </div>
                <h2 class="text-black">L. {{ $productoEnVentaDatos->precio }}</h2>
                <p class="estado mt-2">Estado: <Strong>{{ $productoEnVentaDatos->TBL_CONDICION_PRODUCTOS->descripcion }}</Strong></p>
                <form id="agregarProductoVentaForm" action="{{ route('carrito.producto.venta.agregar', $productoEnVenta->codigo_producto_en_venta) }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <label for="quantity" class="form-label">Cantidad:</label>
                        <input name="cantidadProductoVenta" type="number" id="quantity" class="form-control w-50 mb-3" min="1" max="{{ $productoEnVenta->cantidad }}" value="1">
                    </div>

                    <div class="d-block" id="botones-compra">
                        <button type="submit" id="agregarVentaACarritoButton" class="btn btn-primary btn-lg me-3 text-white" id="agregarACarrito">Agregar al carrito de compras</button>
                        <button class="btn btn-white btn-lg">&#x2661 Agregar a la Lista de favoritos</button>
                    </div>
                </form>

                <!-- Shipping Info -->
                <p class="mt-4"><strong>Entrega:</strong> <img width="25" height="25" src="https://img.icons8.com/cotton/64/empty-flag.png" alt="empty-flag"/> Entrega prevista entre el mar. 31 dic. y el mie. 22 ene. a 0</p>
                <p><strong>Pagos:</strong> <a href="" title="visa iconos"><img width="50" height="50" src="https://img.icons8.com/ios-filled/100/credit-card-front.png" alt="credit-card-front"/><img width="48" height="48" src="https://img.icons8.com/color/48/paypal.png" alt="paypal"/><img width="50" height="50" src="https://img.icons8.com/papercut/120/mastercard--v1.png" alt="mastercard--v1"/><img width="48" height="48" src="https://img.icons8.com/color/48/discover.png" alt="discover"/></a></p>
            </div>
        </div>

        <!-- Seccion de Descripcion del Producto -->
        <div class="mt-5">
            <h3>Descripcion del Producto</h3>
            <p>
                {{ $productoEnVentaDatos->descripcion }}
            </p>
        </div>

        <!-- Customer Reviews -->
        <div class="mt-5">
            <h3 class="mb-3">Valoraciones y reseñas del artículo</h3>

            <h5>Dejar una reseña</h5>

            <form id="agregarResenaForm" action="{{ route('resena.venta.agregar', $productoEnVenta->codigo_producto_en_venta) }}" class="my-3" method="POST">
            @csrf
                <div class="form-floating mb-3">
                    <textarea name="comentario" class="form-control" placeholder="Deja un comentario aqui" id="comentarioTextArea" required></textarea>
                    <label for="floatingTextarea">Comentario</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="valoracion" class="form-select" id="valoracionSelect" required>
                        <option value="" selected>Cantidad de estrellas</option>
                        <option value="1">★</option>
                        <option value="2">★★</option>
                        <option value="3">★★★</option>
                        <option value="4">★★★★</option>
                        <option value="5">★★★★★</option>
                    </select>
                    <label for="floatingSelect">Valoracion</label>
                </div>
                <input type="hidden" name="codigoProducto" value="{{ $productoEnVentaDatos->codigo_producto }}">
                <button type="submit" class="btn btn-primary">Agregar Reseña</button>
            </form>

            <h5>Reseñas de otros usuarios</h5>

            @foreach ($productoEnVentaDatos->TBL_RESENAS as $resenasProductos)
                <div class="border p-3 mb-3">
                    <h5>{{ $resenasProductos->TBL_USUARIOS->nombre_usuario }}</h5>
                    <p class="text-warning mb-0">
                        @for ($i = 0; $i < $resenasProductos->valoracion; $i++)
                            ★
                        @endfor
                        @for ($i = 5; $i > $resenasProductos->valoracion; $i--)
                            ☆
                        @endfor
                    </p>
                    <small class="text-muted">{{ $resenasProductos->fecha }}</small>
                    <p>{{ $resenasProductos->comentario }}</p>
                </div>
            @endforeach

            <!-- Reseñas de ejemplo -->
            <div class="border p-3 mb-3">
                <h5>John Doe</h5>
                <p class="text-warning mb-0">★★★★☆</p>
                <small class="text-muted">Reviewed on 10 Nov 2024</small>
                <p>Great product, but could be improved in some aspects.</p>
            </div>
            <div class="border p-3">
                <h5>Jane Smith</h5>
                <p class="text-warning mb-0">★★★★★</p>
                <small class="text-muted">Reviewed on 8 Nov 2024</small>
                <p>Absolutely love it! Exceeded my expectations.</p>
            </div>
        </div>
    </div>

    @foreach ($usuario->TBL_PRODUCTOS_CARRITOS as $productoCarrito)
        
        @if (!is_null($productoCarrito->codigo_producto_en_venta))
            @if($productoEnVenta->codigo_producto_en_venta == $productoCarrito->codigo_producto_en_venta)

                <div class="visually-hidden" id="yaEnCarritoDiv"></div>
        
            @endif
        @endif
        
    @endforeach

    @endif

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
    <script src=" {{ asset ('/assets/JavaScript/resenia.js') }} "></script>
    <script>
        let agregarVentaACarritoButton = document.getElementById('agregarVentaACarritoButton');
        let agregarProductoVentaForm = document.getElementById('agregarProductoVentaForm');

        if(localStorage.getItem('codigo_usuario')){
            agregarProductoVentaForm.action += `/${localStorage.getItem('codigo_usuario')}`;
        }

        let cantidadEnVentaSpan = document.getElementById('cantidadEnVentaSpan');
        if(cantidadEnVentaSpan.innerText == '0'){
            agregarVentaACarritoButton.classList.add('disabled');
        }

        let yaEnCarritoDiv = document.getElementById('yaEnCarritoDiv');
        if(yaEnCarritoDiv){
            agregarVentaACarritoButton.classList.add('disabled');
        }

    </script>
</body>

</html>

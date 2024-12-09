<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBay - Vista Principal</title>
    <!-- Vinculando Bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vinculando un estilo personalizado -->
    <style>
        
        .category-card {
            margin-bottom: 30px;
        }

        .product-card {
            margin-bottom: 30px;
        }

        .form-control {
            border-color: black;
            border-radius: 20px;
        }

        .search-bar button {

            width: 150px;
            border-radius: 20px;
            padding: 10px;
            border: none;
            color: #fff;
            margin-left: 2%;
        }

        .tendencias{

            justify-content: center;
            max-width: 100%;
            margin: 0 auto;
            margin-top: 5%;
            
        }

        .tendencias .titulo-tendencias{
            max-width: 100%;
            justify-content: center;
            text-align: center;
        }

        .tendencias h5{
            width: 300px;
            margin-left: 2%;
            text-align: center;
            color: black;
            margin-bottom: 3%;
        }

        .tendencias .Imagenes-tendencias{
            
            text-align: center;
            display: grid;
            grid-template-columns: 
            repeat(auto-fit,minmax(150px,1fr));
        
        }


        .tendencias .Imagenes-tendencias img{
    
            margin-left: 20%;
            height: auto;
            width: 150px;
            border-radius: 60%;
            
        }

        .tendencias .Link-tendencias{

            justify-content: center;
            max-width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: 
            repeat(auto-fit,minmax(150px,1fr));
            margin-top: 1%;
                       
           
        }

        .tendencias .Link-tendencias .links{
            
            text-align: center;
            width: 150px;
            height: 150px;
            margin-left: 20%;
           

        }

        .regalos{

            justify-content: center;
            max-width: 100%;
            height: 400px;
            background-color: #e7770e;
            display: flex;
            margin-bottom: 6%;

        }

        .regalos .promocion{

            width: 550px;
            height:  400px;
        }

        .regalos .imagen-promocion{
            text-align: center;
            padding-top: 5%;
            height: 400px;
        }
        
        .regalos h3{
            
            color: black;
            width: 500px;
            padding-top: 20%;
            margin-left: 1%;

        }

        .regalos img{

            justify-content: center;
            border-radius: 20px;
            margin-left: 10%;
            width: 500px;
            height: 250px;
        }
        
        .regalos p{

            color: black;
            margin-left: 2%;
            margin-top: 4%;
            width: 300px;
            margin-bottom: 15%;
        }

        .regalos a{

            margin-left: 2%;
            font-size: 0.8rem;
            color: black;
        }

        .collapse a{

            color: rgb(196, 189, 189);
            margin-left: 4%;
            font-size: 0.8rem;
            width: 80px;
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

        .footer {

            flex-wrap: nowrap;
            justify-content: center;
            background-color: #fcf8f8;
            color: #000000;
        }
        .footer h5 {
            font-weight: bold;
        }
        .footer a {
            color: #000000;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .border-top {
            border-color: #dddddd;
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

        <!-- Carousel Section -->
<div id="ebayCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#ebayCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#ebayCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#ebayCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  
    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Proba.jpg" class="d-block w-100" alt="Discount Slide">
            <div class="carousel-caption">
                <h5>Big Discounts</h5>
                <p>Up to 50% off on select items.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Carruzel_img_2.webp" class="d-block w-100" alt="Limited Time Offers">
            <div class="carousel-caption">
                <h5>Limited Time Offers</h5>
                <p>Grab deals before they expire!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Carruzel_img_2.webp" class="d-block w-100" alt="Shop Electronics">
            <div class="carousel-caption">
                <h5>Shop Electronics</h5>
                <p>Top brands at unbeatable prices.</p>
            </div>
        </div>
    </div>
  
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#ebayCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#ebayCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Tendencias en ebay -->

    <div class="tendencias">

        <div class="titulo-tendencias">

            <h5><Strong>Tendencia en eBay</Strong></h5>

        </div>
        

        <div class="Imagenes-tendencias">

           
            <img src="Producto8_Tendencias.png" alt="">
            <img src="Producto2_Tendencias.jpg" alt="">
            <img src="Producto3_Tendencias.jpg" alt="">
            <img src="Producto4_Tendencias.webp" alt="">
            <img src="Producto6_Tendencias.avif" alt="">
            <img src="Producto7_Tendencias.jpg" alt="">

        </div>

        <div class="Link-tendencias">
            
            <div class="links"><Strong>-10% En Tarjetas coleccionables</Strong></div>
            <div class="links"><Strong>Cafeteras</Strong></div>
            <div class="links"><Strong>Herramientas</Strong></div>
            <div class="links"><Strong>Vestimenta</Strong></div>
            <div class="links"><Strong>Deportes</Strong></div>
            <div class="links"><Strong>Partes y accesorios</Strong></div>

        </div>
            

    </div>

    <!-- Seccion de regalos -->

    <div class="regalos">


        <div class="promocion">
            <h3>Consigue tus regalos a tiempo</h3>
            <p>Ahorra hasta 15% en Tarjetas y juegos coleccionables.</p>
            <a href="">Hasta 12/Dic/2024 Gasto min 50$. Descuentdo maximo 30$.</a>
        </div>
        
        <div class="imagen-promocion">
            <img src="regalos1.webp" alt="">
        </div>
        

    </div>

    <!-- Pie de página -->
    <body>
        <footer class="footer pt-5 pb-4 border-top">
            <div class="container">
                <div class="row">
                    <!-- Columna: Comprar -->
                    <div class="col-md-2 col-6 mb-4">
                        <h5>Comprar</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Ropa</a></li>
                            <li><a href="#">Electrónica</a></li>
                            <li><a href="#">Hogar</a></li>
                            <li><a href="#">Deportes</a></li>
                        </ul>
                    </div>
    
                    <!-- Columna: Herramientas y Aplicaciones -->
                    <div class="col-md-2 col-6 mb-4">
                        <h5>Herramientas y Aplicaciones</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Aplicación móvil</a></li>
                            <li><a href="#">Centro de desarrolladores</a></li>
                            <li><a href="#">eBay API</a></li>
                        </ul>
                    </div>
    
                    <!-- Columna: Sigue conectado -->
                    <div class="col-md-2 col-6 mb-4">
                        <h5>Sigue conectado</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
    
                    <!-- Columna: Acerca de eBay -->
                    <div class="col-md-2 col-6 mb-4">
                        <h5>Acerca de eBay</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Historia</a></li>
                            <li><a href="#">Carreras</a></li>
                            <li><a href="#">Inversores</a></li>
                        </ul>
                    </div>
    
                    <!-- Columna: Ayuda y contacto -->
                    <div class="col-md-2 col-6 mb-4">
                        <h5>Ayuda y contacto</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Centro de ayuda</a></li>
                            <li><a href="#">Contáctanos</a></li>
                            <li><a href="#">Devoluciones</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="mb-0">&copy; 2024 eBay. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>

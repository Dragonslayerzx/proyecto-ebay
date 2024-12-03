<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBay - Productos por Categoría</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }

        .product-card a#descripcion{

            color: black;
            text-align: center;
            font-size: 0.9rem;
        }
        .product-card .price {
            margin-top: 4%;
            font-size: 1.1rem;
            color: #007bff;
            font-weight: bold;
        }


        #producto{

            margin-bottom: 4%;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        #categoria h1{

            max-width: 100%;
            padding-right: 56%;
        }

        #categoria p{

            max-width: 100%;
            padding-right: 66%;
        }

    </style>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fw-bold">
        <div class="container-fluid">
            <span class="dropdown">
                <button class="navbar-text me-3 btn dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">¡Hola, Usuario!</button>
                <div class="row dropdown-menu p-3 text-body-secondary rounded" style="width: 300px;">
                        <div class="row mb-3">
                            
                            <div class="col-4 me-1 p-0">
                                <a href="#" class="btn p-0">
                                    <img class="img-fluid" src="https://green.excertia.com/wp-content/uploads/2020/04/perfil-empty.png" alt="">
                                </a>
                            </div>
                            <div class="mx-2 mt-2 col p-0">
                                <div class="my-2 fw-bold">Usuario</div>
                                <a href="#" class="p-0 text-body-tertiary">Nombre Usuario</a>
                            </div>

                        </div>
                        <p class="mb-0">
                            <a href="#" class="col btn">Configuracion de la cuenta</a>
                            <a href="#" class="col btn">Cerrar sesion</a>
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
                    <a class="nav-link" href="#">Vender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        Lista de artículos que sigues
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="#">Mi Ebay</a>
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
                    <a class="nav-link position-relative" href="#">
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
            <a class="navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png" alt="eBay Logo" style="height: 60px;">
            </a>
            <div class="dropdown me-2">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownCategories" data-bs-toggle="dropdown" aria-expanded="false">
                    Comprar por categoría
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownCategories">
                    <!-- Añade aquí las categorías -->
                    <li><a class="dropdown-item" href="#">Electrónica</a></li>
                    <li><a class="dropdown-item" href="#">Moda</a></li>
                    <li><a class="dropdown-item" href="#">Hogar y jardín</a></li>
                    <li><a class="dropdown-item" href="#">Juguetes</a></li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSearch">
                <form class="d-flex w-75 ">
                    <div class="input-group">
                        <span class="input-group-text border-dark bg-white border-end-0 rounded-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </span>
                        <input type="text" class="form-control border-dark border-start-0" placeholder="Buscar artículos" aria-label="Buscar artículos">
                        <select class="form-select border-dark border-start-0 rounded-end" style="max-width: 200px;">
                            <option selected>Todas las categorías</option>
                            <!-- Opciones de categorías adicionales -->
                        </select>
                        <button class="btn btn-primary mx-3 rounded-pill" type="submit">
                            <div class="mx-2">Buscar</div>
                        </button>
                    </div>
                </form>
                <a class="nav-link" href="#">Búsqueda avanzada</a>
            </div>
        </div>
    </nav>

    <!-- Verificar que no esté nulo y causar muchos problemas -->
    
    @if ($productosEnCategoria && !empty($categoria) && (!empty($categoria->codigo_categoria_padre) || $categoria->codigo_categoria_padre === 0) && (!empty($categoria->codigo_categoria) || $categoria->codigo_categoria === 0))
        
    @if ($categoria->codigo_categoria === 0)

        <div class="container my-4" id="categoria">
            <section class="row">
                <div class="fw-bold fs-1">Todos los productos</div>
                @php
                    $regexText = preg_replace('/^\/(.*)\/[a-z]*$/', '$1', $regex);
                @endphp
                @if ($regexText === '.*')
                    <p id="encabezado" class="p-3 text-muted">Encuentra lo mejor en nuestra tienda Buscando resultados para "{{$regexText}}"</p>
                @else
                    <p id="encabezado" class="p-3 text-muted">Buscando resultados para "{{$regexText}}"</p>
                @endif
                
            </section>
        </div>

    @endif
        
    @if (!empty($categoria->codigo_categoria_padre))

        <div class="container my-4" id="categoria">
            <section class="row">
                <div class="fw-bold fs-1">Productos de {{ $categoria->nombre }}</div>
                @php
                    $regexText = preg_replace('/^\/(.*)\/[a-z]*$/', '$1', $regex);
                @endphp
                @if ($regexText === '.*')
                    <p id="encabezado" class="p-3 text-muted">Encuentra lo mejor en nuestra tienda Buscando resultados para "{{$regexText}}"</p>
                @else
                    <p id="encabezado" class="p-3 text-muted">Buscando resultados para "{{$regexText}}"</p>
                @endif
            </section>
        </div>
        
    @endif

    <!-- Product Grid -->
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4">
            @foreach ($productosEnCategoria as $productoEnCategoria)
            @if ($productoEnCategoria->codigo_categoria == $categoria->codigo_categoria || $categoria->codigo_categoria == 0)
                
            
                @php
                    $coincidencia = preg_match($regex, $productoEnCategoria->nombre_producto) === 1;
                    
                @endphp
                @if (($productoEnCategoria->TBL_PRODUCTOS_EN_VENTA || $productoEnCategoria->TBL_SUBASTAS) && $coincidencia)
                
                <!-- Product Card -->
                <div class="col" id="producto">
                    <div class="card product-card h-100 shadow">
                        <img width="200px" height="200px" src="{{ $productoEnCategoria->foto }}" class="card-img-top" alt="Producto 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                <strong>
                                    {{ $productoEnCategoria->nombre_producto }}
                                </strong>
                            </h5>
                            <div id="descripcion" class="text-start d-block">
                                {{ $productoEnCategoria->descripcion }}
                            </div>
                            <div class="d-flex flex-column mt-auto">
                                
                                @if ($productoEnCategoria->TBL_PRODUCTOS_EN_VENTA)
                                    <p class="price">
                                        L.
                                        {{ $productoEnCategoria->precio }}.00
                                        
                                    </p>
                                    <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                                @else

                                    @if ($productoEnCategoria->TBL_SUBASTAS)

                                        @php
                                            $mayor = 0;
                                            $contador = 1;
                                        @endphp
                                        
                                        @if ($productoEnCategoria->TBL_SUBASTAS->TBL_PUJAS->isNotEmpty())
                                            
                                            @foreach ($productoEnCategoria->TBL_SUBASTAS->TBL_PUJAS as $pujasProducto)
                                                
                                                @if ($contador == 1)
                                                    @php
                                                        $mayor = $pujasProducto->monto;
                                                        $contador += 1;
                                                    @endphp
                                                @else
                                                
                                                    @if ($pujasProducto->monto > $mayor)
                                                        @php
                                                            $mayor = $pujasProducto->monto;
                                                        @endphp
                                                    @endif

                                                @endif
                                            @endforeach

                                            @foreach ($productoEnCategoria->TBL_SUBASTAS->TBL_PUJAS as $pujasProducto)
                                                
                                                    @if ($pujasProducto->monto == $mayor)
                                                        <p class="price">
                                                            <span>Puja actual:</span><br>
                                                            <span>L.{{ $pujasProducto->monto }}.00</span>
                                                        </p>
                                                    @endif
                                                
                                            @endforeach

                                        @else

                                            <p class="price">
                                                <span>Comienza con:</span><br>
                                                <span>L.{{ $productoEnCategoria->TBL_SUBASTAS->precio_inicio }}.00</span>
                                            </p>

                                        @endif

                                        <a href="#" class="btn btn-primary btn-sm">
                                            Pujar ahora
                                        </a>

                                    @endif

                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endif
            @endforeach

            <!-- Ejemplo por si no hay datos en la BD -->

            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img style="width: 200px; height: 200px;" src="https://images.fravega.com/f300/af307532ba68979cbd597c12fffcbfe2.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"> <Strong>Motorola Edge</Strong></h5>
                        <div id="descripcion" class="text-start d-block">Telefono Motorola Edge cuenta con una excelente camara</div>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$79.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img style="width: 200px; height: 200px;" src="https://www.almacenestropigas.com/media/catalog/product/1/5/1503280_00_1.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=200&width=200&canvas=200:200" class="card-img-top" alt="Producto 3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><Strong>Control Remoto</Strong></h5>
                        <a id="descripcion" href="" class="text-start d-block">Control Remoto Sony adaptable a cualquier TV duracion de bateria</a>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$49.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img width="200px" height="200px" src="https://www.jbl.com.gt/dw/image/v2/AAUJ_PRD/on/demandware.static/-/Sites-masterCatalog_Harman/default/dw13d2ebb3/JBL_GO_4_HERO_BLACK_48156_x4.jpg?sw=270&sh=330&sm=fit&sfrm=png" class="card-img-top" alt="Producto 4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><Strong>Parlante JBL</Strong></h5>
                        <a id="descripcion" href="" class="text-start d-block">Conectividad Wi-Fi, luz led incluida altavos incorporado</a>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$59.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img width="200px" height="200px" src="https://gamerohn.com/cdn/shop/files/WH-CH520negro_2048x.jpg?v=1695180784" class="card-img-top" alt="Producto 5">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><Strong>Audifonos Sony</Strong></h5>
                        <a id="descripcion" href="" class="text-start d-block">Cancelacion de ruido y almoadilla sueva hecha de algodon</a>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$89.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img width="200px" height="200px" src="https://comercialatalaya.com/wp-content/uploads/2024/11/54597-large_default-250x250.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><Strong>Proyector Q5</Strong></h5>
                        <a id="descripcion" href="" class="text-start d-block">Altavoz incorporado Tk700 200 lumenes compatible HDMI</a>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$99.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img src="https://cdn.drouot.com/d/image/lot?size=fsquare&path=2235/137644/1c7ee7fbad027165d74aa05d4493de1c" class="card-img-top" alt="Producto 2">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><strong>Microfono</strong></h5>
                        <a id="descripcion" href="" class="text-start d-block">Ideal streaming continuo,  podcasting y grabaciones de canal</a>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$79.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img width="200px" height="200px" src="https://www.mangas.cl/mangasfusion/409-home_default/camara-de-vigilancia-zexi-2mpx.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><strong>Camara Hikvision</strong> </h5>
                        <a id="descripcion" href="" class="text-start d-block">Visión nocturna 2100p y detección de movimiento alrededor</a>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$49.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img width="200px" height="200px" src="https://luminahn.com/869-home_default/foco-g25-luz-calida-vidrio-blanco.jpg" class="card-img-top" alt="Producto 4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><Strong>Foco Argos</Strong></h5>
                        <a id="descripcion" href="" class="text-start d-block">Producen alrededor de un 80% de calor y un 20% de luz</a>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$59.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
            <div class="col" id="producto">
                <div class="card product-card h-100 shadow">
                    <img src="https://comercialatalaya.com/wp-content/uploads/2022/12/RADIO-PORATIL-CD-MP3-Y-USB-AZUL-ROADSTAR-CDR365Y_B-250x250.jpg" class="card-img-top" alt="Producto 5">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"> <Strong>Grabadora</Strong></h5>
                        <a id="descripcion" href="" class="text-start d-block">Convierte las ondas a una señal eléctrica analógica entrada USB</a>
                        <div class="d-flex flex-column mt-auto">
                            <p class="price">$89.99</p>
                            <a href="#" class="btn btn-primary btn-sm">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

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
        
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
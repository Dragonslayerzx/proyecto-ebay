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


    <div class="container my-3">

        <div class="row fw-bold fs-4">
            <div class="col">Carro de compras</div>
        </div>

        <div class="row">
            
            <div class="col-8">
                
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

            

            <div class="mx-2 col align-self-start border rounded p-1">
                <div class="mx-3">
                        <div class="row mt-2"> 
                            <div class="col">
                                Articulos (2)
                            </div>
                            <div class="col text-end">
                                $1000.00
                            </div>
                        </div>
                        <div class="row mb-3"> 
                            <div class="col">
                                Envio a 504
                            </div>
                            <div class="col text-end">
                                $100.00
                            </div>
                        </div>
                    <div class="row border-bottom mx-1"></div>
                    <div class="row mt-2 fw-bold fs-3">
                        <div class="col">Subtotal</div>
                        <div class="col text-end">US $1100.00</div>
                    </div>
                    <div class="row">
                        <div class="col mx-4 my-3 btn btn-primary">Completar la transacción</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
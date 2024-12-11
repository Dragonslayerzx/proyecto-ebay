<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subir Productos</title>
    <!-- Vinculación de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: "Host Grotesk", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
      }

      .navbar-brand img {
        height: 40px; /* Ajusta el tamaño del logo */
      }
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar border-bottom">  
        <div class="container">
          <a class="navbar-brand mx-auto" href="{{ route('principal') }}">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/1/1b/EBay_logo.svg"
              alt="eBay Logo"
            />
          </a>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container py-3">
        <div class="row justify-content-center">
          <div class="col-md-9 py-3">
                <form action="{{ route('usuario.producto.listar.confirmar', $usuario->codigo_usuario) }}" method="POST">
                  @csrf
                  <!-- Nombre -->
                  <div class="mt-5">
                    <h1 class="h4">Listar producto</h1>
                    <p class="text-muted">Llena los detalles para subir tu producto a nuestra plataforma.</p><br>
                    <label for="product-name" class="form-label h5">Nombre del Producto</label>
                    <input name="nombreProducto" type="text" class="form-control form-control" id="product-name" placeholder="Escribe el nombre del producto" required>
                  </div>
                  <div class="border-bottom py-5">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="product-category" class="form-label h5">Categoría</label>
                      </div>
                      <div class="col-md-6">
                        <select name="codigoCategoria" class="form-select" id="product-category" required>
                          <!-- Traer categorias desde backend-->
                          <option value="" selected disabled>Selecciona una categoría</option>
                          @if ($categorias->isNotEmpty())
                              @foreach ($categorias as $categoria)
                                @if ($categoria->codigo_categoria_padre)
                                  <option value="{{ $categoria->codigo_categoria }}">{{ $categoria->nombre }}</option>
                                @endif
                              @endforeach
                          @endif
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Detalles -->
                  <div class="border-bottom py-5">
                    <h1 class="h4">Detalles del producto</h1>
                    <p class="text-muted">Los compradores necesitan detalles para encontrar tu producto.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="product-brand" class="form-label h5">Marca</label>
                            <input name="marcaProducto" type="text" class="form-control" id="product-brand" placeholder="Escribe el nombre del producto" required>
                        </div>
                        <div class="col-md-6">
                            <label for="product-model" class="form-label h5">Modelo</label>
                            <input name="modeloProducto" type="text" class="form-control" id="product-model" placeholder="Escribe el nombre del producto" required>
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <label for="product-condition" class="form-label h5">Estado</label>
                            <select name="codigoCondicionProducto" class="form-select" id="product-condition" required>
                                <option value="" selected disabled>Selecciona una estado</option>
                                @if ($condicionesProducto->isNotEmpty())
                                    @foreach ($condicionesProducto as $condicionProducto)
                                      <option value="{{ $condicionProducto->codigo_condicion_producto }}">{{ $condicionProducto->descripcion }}</option>
                                    @endforeach
                                @endif
                              </select>
                        </div>
                      </div>
                  </div>
                  <!-- Precio -->
                  <div class="border-bottom py-5">
                    <h1 class="h4">Fijado de precio</h1>
                    <p class="text-muted">Asigna un precio a tu producto y la cantidad a listar</p>
                    <div class="row mt-4">
                      <div class="col-md-6">
                        <label for="product-price" class="form-label h5">Precio</label>
                      </div>
                      <div class="col-md-6 input-group">
                        <span class="input-group-text">L.</span>
                        <input name="precioProducto" type="number" class="form-control" id="product-price" placeholder="0.00" required>
                      </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                          <label for="product-quantity" class="form-label h5">Cantidad</label>
                        </div>
                        <div class="col-md-6">
                          <input name="cantidadProducto" type="number" class="form-control" id="product-quantity" placeholder="Digita la cantidad" min="1" required>
                        </div>
                      </div>
                  </div>
                  <!-- Subir Imagen del producto-->
                  <div class="border-bottom py-5">
                    <label for="product-image" class="form-label h4">Link fotografia</label>
                    <input name="fotoProducto" type="text" placeholder="Escribe el url de la fotografia" class="form-control" id="product-image" required>
                  </div>
                 <!-- Descripcion -->
                  <div class="border-bottom py-5">
                    <label for="product-description" class="form-label h4">Descripcion</label>
                    <textarea name="descripcionProducto" class="form-control" id="product-description" rows="8" placeholder="Escribe una descripcion detallada del producto" required></textarea>
                  </div>
                  <div class="text-center py-5">
                    <h4 class="fs-4">Lista tu producto gratis</h4>
                    <p>Una tarifa de final de venta sera aplicada al vender el producto</p>
                    <p>Al selccionar Listar producto, se acpetan las condiciones de servicio, reconociendo haber leido el acuerdo de privacidad de usuario y asumiendo la total responsabilidad por el producto listado.</p><br>
                    <button type="submit" class="btn btn-primary w-50">Listar Producto</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="border-top py-4" >
        <div class="text-center">
            <p class="text-muted"><small>Copyright © 1995-2024 eBay Inc. All Rights Reserved. Accessibility, User Agreement, Privacy, Consumer Health Data, Payments Terms of Use, Cookies, CA Privacy Notice, Your Privacy Choices</small></p>
        </div>
      </footer>

    <!-- Vinculos de cripts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
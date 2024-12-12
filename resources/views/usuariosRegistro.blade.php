<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro EBAY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: #fff;
      font-family: Arial, sans-serif;
      flex-direction: column;
    }
    .header-imagenEBAY {
      
      align-items: center;
      margin-top: 1rem;
      
    }
    .container {
      background-color: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      display: flex;
      gap: 2rem;
      width: 100%;
      max-width: auto;
    }
    .imagen img {
      border-radius: 8px;
      max-width: auto;
      height: auto;
    }
    .formulario{
      align-items: right;
      width: 500px;
      justify-content: right;
      float: right;
    }
    .formulario h2 {
      font-weight: bold;
    
    }
    .formulario .btn-group .btn {
      width: 50%;
      font-weight: bold;
    }
    .formulario .form-control {
      border-radius: 30px;
    }
    .formulario .form-text {
      font-size: 0.85rem;
    }
    
  </style>
</head>
<body>

<!-- Logo de eBay -->
<div class="header-imagenEBAY"  style="display: flex; justify-content: flex-start;" >
   <img  class="float-start"  width="200" height="100" src="data:image/png;base64,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" alt="">
  
  </div>


<div class="container">
  <!-- Imagen -->
  <div class="Imagen">
    <img src="https://ir.ebaystatic.com/cr/v/c01/buyer_dweb_individual.jpg" >
  </div>

  <!-- Formulario -->
  <div class="formulario">
    <h2>Crear una cuenta</h2>
    <div class="btn-group mb-3" role="group">
      <button type="button" class="btn btn-dark">Personal</button>
      <button type="button" class="btn btn-outline-dark">Comercial</button>
    </div>
    
    <form action="{{route('usuario.guardar')}}" method="POST">
      @csrf
      <div class="row g-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" name="apellido" required>
        </div>
        <div>
          <input type="text" class="form-control" placeholder="Nombre Usuario" name="usuario" required>
        </div>
      </div>
      
      <div class="my-3">
        <input type="email" class="form-control" placeholder="Correo electrónico" name="correo" required>
      </div>
      <div class="my-3">
        <input type="tel" class="form-control" placeholder="Telefono" name="telefono" required>
      </div>
      <div class="my-3">
        <div class="input-group">
          <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required>
          <span class="input-group-text"><i class="bi bi-eye"></i></span>
        </div>
        
      </div>
      <p class="form-text">
        Al seleccionar <strong>Crear una cuenta personal</strong>, aceptas nuestras 
        Condiciones de uso y admites haber leído nuestro 
        Aviso de privacidad.
      </p>
      <button type="submit" class="btn btn btn-dark w-100 mb-3">Crear una cuenta personal</button>
    </form>
    <div>
      <p  style="font-size: 60; text-align: center; color: rgb(60, 49, 49);"  >¿Ya tienes una cuenta? <a href="{{route('usuario.login')}}">Inicia Sesion</a></p>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
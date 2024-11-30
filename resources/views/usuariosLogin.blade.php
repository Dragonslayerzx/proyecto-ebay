<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .logo-container {
            margin: 20px;
        }
        .logo {
            max-width: 120px;
        }
        .login-section {
            text-align: center;
            margin-top: 50px;
        }
        .login-section h4 {
            font-weight: bold;
        }
        .input-field {
            margin: 10px auto;
            width: 100%;
            max-width: 400px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 16px;
            display: block;
        }
        .btn-primary {
            background-color: #0056b3;
            border: none;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            max-width: 400px;
            display: block;
            margin: 10px auto;
            border-radius: 25px; 
        }
        .btn-primary:hover {
            background-color: #004b9a;
        }
        .footer {
            background-color: #ffffff; 
            text-align: center;
            padding: 15px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #ccc; 
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Logo -->
        <div class="logo-container">
            <img src="data:image/png;base64,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" alt="eBay Logo" class="logo">
        </div>

        <div class="login-section">
            <h4>Inicia sesión en tu cuenta</h4>
            <p>¿Primera vez en eBay? <a href="{{route('usuario.registro')}}">Crear cuenta</a></p>
            <form action="{{route('usuario.auth')}}" method="POST">
                @csrf
                <input type="text" class="input-field" placeholder="Correo electrónico o nombre de usuario" name="usuario" required>
                <input type="password" class="input-field" placeholder="Contraseña" name="contrasena" required>
                <button type="submit" class="btn btn-primary">Continuar</button>
            </form>
            @if($errors->has('mensaje'))
                <div class="alert alert-danger col-2 mx-auto">
                {{ $errors->first('mensaje') }}
                </div>
            @endif

        </div>
    </div>
    <footer class="footer">
        <p>Copyright © 1995-2024 eBay Inc. Todos los derechos reservados. Condiciones de uso, Aviso de privacidad, Condiciones de uso de pagos, cookies y AdChoice</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
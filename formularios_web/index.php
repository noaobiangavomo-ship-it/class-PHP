<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["error"]) ) {
    if ($_GET["error"] == "usuario_no_encontrado") {
        echo "<p style='color: red;'>Usuario no encontrado. Por favor, regístrese.</p>";
    }
     elseif ($_GET["error"] == "password_incorrecto") {        
    echo "<p style='color: red;'>Usuario o contraseña incorrectos. Por favor, inténtelo de nuevo.</p>"; 
}
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="styles.css">
    <title>Iniciar sesión</title>
</head>
<body>
    
    <form class="form" method="POST" action="middleware.php">
        <div class="mb-3 form-div">
            <label class="form-label" for="email">Correo Electrónico</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese su correo electrónico">
        </div>
        <div class="mb-3 form-div">
            <label class="form-label" for="password">Contraseña</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
        </div>
        <div class="mb-3 form-div">
            <button class="btn btn-primary" type="submit">Iniciar sesión</button>
        </div>
        <div class="mb-3 form-div">
            <p>¿No tienes una cuenta? <br><br>
             <a href="registro.php">Regístrate aquí</a></p>
        </div>
    </form>
    
</body>
</html>
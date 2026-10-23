<?php
ini_set("display_errors",1);
ini_set("display_starttup_errors",1);
error_reporting(E_ALL);
require_once __DIR__ .  "/confing.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="./assets/styles_login.css">
    
</head>
<body>
  
   <form class="form" method="POST" action="./controllers/loginMid.php">
        <div class= "logo" >

         <img src="./img/5.jpeg" alt="">

        </div>
        <div class= "titulo">
            <h3>Iniciar sesion</h2>
        </div>
        <div class="caja">
            <label class="form-label" for="email">Correo Electrónico</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese su correo electrónico" required>
        </div>
        <div class="caja">
            <label class="form-label" for="password">Contraseña</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
        </div>
        <div class="caja">
            <button class="btn btn-primary" type="submit">Iniciar sesión</button>
        </div>
        
    </form>    

    <?php if (($_GET["error"] ?? "") === "invalid-credentials"): ?>
        <p role="alert">El correo electrónico o la contraseña no son correctos.</p>
    <?php endif; ?>


</body>
</html>

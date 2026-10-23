<?php

//  inicia la sesión solo si todavía no está activa.
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

//  vacía los datos de sesión
$_SESSION = [];



session_destroy();

//vuelve a la página pública después de cerrar sesión.
header('Location: ../index.php');
exit;
?> 
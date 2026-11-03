<?php

session_start();

// Solo acepta peticiones POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
    exit;
}

// Recoger datos
$nombre = trim($_POST["nombre"] ?? "");
$email = trim($_POST["email"] ?? "");
$fecha = trim($_POST["fecha"] ?? "");
$personas = trim($_POST["personas"] ?? "");
$preferencia = trim($_POST["preferencia"] ?? "");

// 1. Comprobar campos vacíos
if (
    $nombre == "" ||
    $email == "" ||
    $fecha == "" ||
    $personas == "" ||
    $preferencia == ""
) {
    header("Location: ../index.php?error=campos");
    exit;
}

// 2. Comprobar número de personas
if (
    !is_numeric($personas) ||
    $personas < 1 ||
    $personas > 10 ||
    $personas != (int)$personas
) {
    header("Location: ../index.php?error=personas");
    exit;
}

// 3. Comprobar preferencia
if ($preferencia != "interior" && $preferencia != "terraza") {
    header("Location: ../index.php?error=preferencia");
    exit;
}

// Comprobar formato del email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index.php?error=campos");
    exit;
}

// Guardar los datos en la sesión
$_SESSION["reserva"] = [
    "nombre" => $nombre,
    "email" => $email,
    "fecha" => $fecha,
    "personas" => (int)$personas,
    "preferencia" => $preferencia
];

// Redirigir a confirmación
header("Location: ../confirmacion.php");
exit;
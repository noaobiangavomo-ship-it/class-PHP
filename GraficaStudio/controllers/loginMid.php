<?php
// filepath: /home/zharik/Documentos/class/php/GraficaStudio/controllers/loginMid.php

require_once __DIR__ . "/../confing.php";
require_once __DIR__ . "/../data.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    exit;
}

$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";

//usamos $usuarios, definido en data.php,
// y comparamos con la clave "email", no con "username".
foreach ($usuarios as $persona) {
    if (
        strcasecmp($email, $persona["email"]) === 0 &&
        $password === $persona["password"]
    ) {
        session_regenerate_id(true);

        $_SESSION["user"] = [
            "username" => $persona["email"],
            "rol" => strtoupper($persona["rol"]),
        ];

        header("Location: ../dashboard.php");
        exit;
    }
}

header("Location: ../login.php?error=invalid-credentials");
exit;

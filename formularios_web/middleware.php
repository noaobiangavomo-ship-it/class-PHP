<?php
session_start();

function redirect($file, $error = null): void
{
    $url = "./" . $file . ".php";
    if ($error != null) {
        $url .= "?error=" . $error;
    }
    header("Location: $url");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $passwd = $_POST["password"];

    /*
     *
     * SELECT email, password FROM Users WHERE email = '$email';
     *
     * Puede retornar 2 cosas:
     *  - Si no existe => Null o None (vacío)
     *  - Si exista => 1 fila (objeto) como si fuese un array con dos valores.
     *                 email, password.
     *
     * */

    $arr = [
        "usuario" => "leonor@gmail.com",
        "passwd" => "12345",
    ];

    if (count($arr) > 0 && $arr["usuario"] === $email) { /* Usuario existe porque el arr tiene valores*/
        if ($passwd === $arr["passwd"]) {
            /* Contraseña correcta. Permitimos acceder al panel de control */

            $_SESSION["usuario_logged"]="leonor";
            redirect("dashboard");
        } else {
            /* Contraseña incorrecta. Retornamos a login con mensaje de error */
            redirect("index", "passwd-incorrect");
        }
    } else {
        /* Retornamos al login con mensaje de "Usuario no encontrado" */
        redirect("index", "user-not-exist");
    }

} else {
    redirect("index", "403");
}
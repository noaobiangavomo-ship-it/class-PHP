<?php
//

//  carga la configuración antes de iniciar la sesión.
require_once __DIR__ . '/../config.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

//  este controlador solo procesa formularios enviados por POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

require_once __DIR__ . '/../data.php';

$username = trim((string) ($_POST['username'] ?? ''));
$password = (string) ($_POST['password'] ?? '');
$usuarioEncontrado = null;

//  busca una cuenta con la estructura definida en data.php.
if (isset($usuarios) && is_array($usuarios)) {
    foreach ($usuarios as $usuario) {
        if (
            is_array($usuario)
            && isset($usuario['username'], $usuario['password'], $usuario['role'])
            && hash_equals((string) $usuario['username'], $username)
        ) {
            $usuarioEncontrado = $usuario;
            break;
        }
    }
}

//  acepta contraseñas hasheadas o en texto simple para ajustarse
// a los datos de ejemplo; en un proyecto real, guárdalas siempre con hash.
$accesoValido = false;

if ($usuarioEncontrado !== null && $password !== '') {
    $contrasenaGuardada = (string) $usuarioEncontrado['password'];
    $accesoValido = password_verify($password, $contrasenaGuardada)
        || hash_equals($contrasenaGuardada, $password);
}

if (!$accesoValido) {
    header('Location: ../login.php?error=1');
    exit;
}

//  regenerar el ID reduce el riesgo de fijación de sesión.
session_regenerate_id(true);
$_SESSION['username'] = $usuarioEncontrado['username'];
$_SESSION['role'] = $usuarioEncontrado['role'];

header('Location: ../dashboard.php');
exit;
<?php
require_once __DIR__ . "/confing.php";

//  los administradores pueden acceder al formulario de alta.
if (!siEstaLogeado()) {
    header("Location: login.php");
    exit;
}
if (!isAdmin()) {
    http_response_code(403);
    $sinPermiso = true;
} else {
    $sinPermiso = false;
}

$error = "";
if (!$sinPermiso && $_SERVER["REQUEST_METHOD"] === "POST") {
    //  recoger y comprobar los datos del formulario antes de guardarlos.
    $titulo = trim($_POST["titulo"] ?? "");
    $entrevista = trim($_POST["entrevista"] ?? "");
    $profesion = trim($_POST["profesion"] ?? "");
    $categoria = trim($_POST["categoria"] ?? "");
    $fecha = (int) ($_POST["fecha"] ?? 0);
    $imagen = $_POST["imagen"] ?? "";

    if ($titulo === "" || $entrevista === "" || $profesion === "" || $categoria === "" || $fecha < 1900 || $fecha > 2100) {
        $error = "Completa todos los campos con valores válidos.";
    } elseif (!in_array($imagen, ["1.jpeg", "2.jpeg", "3.jpeg", "4.jpeg"], true)) {
        $error = "Selecciona una imagen existente de la carpeta img.";
    } else {
        // el identificador recorriendo la lista.
        $id = 1;
        foreach ($_SESSION["revistas"] as $revista) {
            if ($revista["id"] >= $id) {
                $id = $revista["id"] + 1;
            }
        }

        $_SESSION["revistas"][] = [
            "id" => $id,
            "titulo" => $titulo,
            "entrevista" => $entrevista,
            "profesion" => $profesion,
            "categoria" => $categoria,
            "fecha" => $fecha,
            "destacado" => isset($_POST["destacado"]),
            "imagen" => "img/" . $imagen,
        ];

        // C redirigir tras guardar evita que el navegador repita el envío al recargar.
        header("Location: dashboard.php?guardado=1");
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir revista | <?= APP_NAME ?></title>
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="stylesheet" href="./assets/styles_add.css">
    
</head>
<body>
    <?php include __DIR__ . "/partials/header.php"; ?>
    <main>
        <?php if ($sinPermiso): ?>
            <h2>Acceso denegado</h1>
            <p>Solo una cuenta administradora puede añadir revistas.</p>
        <?php else: ?>
            
            <?php if ($error !== ""): ?><p role="alert"><?= $error ?></p><?php endif; ?>
                <form class="form" method="post" action="add_item.php">
                    <div class="caja">
                <h1>Añadir revista</h1>
                     <label class="form-label" for="titulo">Título</label>
                     <input class="form-control" id="titulo" name="titulo" required value="<?= $_POST["titulo"] ?? "" ?>">
               </div>

                     <div class="caja">
                     <label class="form-label" for="entrevista">Entrevista</label>
                     <input class="form-control" id="entrevista" name="entrevista" required value="<?= $_POST["entrevista"] ?? "" ?>">
                     </div>
             
                     <div class="caja">
                     <label class="form-label" for="profesion">Profesión</label>
                     <input class="form-control" id="profesion" name="profesion" required value="<?= $_POST["profesion"] ?? "" ?>">
                </div>

                     <div class="caja">
                     <label class="form-label" for="categoria">Categoría</label>
                     <input class="form-control" id="categoria" name="categoria" required value="<?= $_POST["categoria"] ?? "" ?>">
                </div>

                     <div class="caja">
                     <label class="form-label" for="fecha">Año</label>
                     <input class="form-control" id="fecha" name="fecha" type="number" min="1900" max="2100" required value="<?= $_POST["fecha"] ?? date("Y") ?>">
                 </div>

                      <div class="caja">
                     <label class="form-label" for="imagen">Imagen</label>
                     <select class="form-control" id="imagen" name="imagen" required>
                    <option value="">Selecciona una imagen</option>
                    <?php foreach (["1.jpeg", "2.jpeg", "3.jpeg", "4.jpeg"] as $archivo): ?>
                        <option value="<?= $archivo ?>" <?= (($_POST["imagen"] ?? "") === $archivo) ? "selected" : "" ?>><?= $archivo ?></option>
                    <?php endforeach; ?>
                </select>
                 </div>

                 <div class="caja">
                <label class="form-label"><input type="checkbox" name="destacado" value="1" <?= isset($_POST["destacado"]) ? "checked" : "" ?>> Mostrar como destacada</label>
                <button class="btn btn-primary" type="submit">Guardar revista</button>
                </div>
            </form>
        <?php endif; ?>
    </main>
</body>
</html>

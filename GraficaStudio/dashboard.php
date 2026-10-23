<?php

require_once __DIR__ . "/confing.php";

//  el panel requiere una sesión iniciada y redirige a visitantes al login.
if (!siEstaLogeado()) {
    header("Location: login.php");
    exit;
}

$revistas = $_SESSION["revista"];
$nombreUsuario = htmlspecialchars($_SESSION["user"]["username"], ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control | <?= htmlspecialchars(APP_NAME, ENT_QUOTES, "UTF-8") ?></title>
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="stylesheet" href="./assets/style_header.css">
    <link rel="stylesheet" href="./assets/styles.css">
</head>

<body>
    <?php include __DIR__ . "/partials/header.php"; ?>
    <main>
        <h1>Panel de control</h1>
        <p>Hola, <?= $nombreUsuario ?>. Aquí puedes consultar las revistas guardadas.</p>

        <?php if (($_GET["guardado"] ?? "") === "1"): ?>
            <p role="status">La revista se ha añadido correctamente.</p>
        <?php endif; ?>

        <?php if (isAdmin()): ?>
            <p><a href="add_item.php">Añadir una revista</a></p>
        <?php endif; ?>

        <h2>Revistas (<?= count($revistas) ?>)</h2>
        <section class="revistas">
            <?php if ($revistas): ?>
                <?php foreach ($revistas as $revista): ?>
                    <?php pintarTarjeta($revista); ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aún no hay revistas en el catálogo.</p>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>

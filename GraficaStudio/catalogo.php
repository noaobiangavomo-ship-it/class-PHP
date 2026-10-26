<?php

require_once "confing.php";
// para filtrar por profesión.
$profesionElegida = "Modelo";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalogo</title>
    <link rel="stylesheet" type="text/css" href="./assets/styles.css">
</head>

<body>
   <?php include_once __DIR__ .  "/partials/header.php";?> 
   <main>
    <h1>Catálogo de revistas</h1>

    <section class="revistas">
        <?php
        foreach ($revistas as $revista) {
            pintarTarjeta($revista);
        }
        ?>
    </section>

    <h2>Modelos</h2>

    <section class="revistas">
        <?php
        foreach ($revistas as $revista) {
            if (stripos($revista["profesion"], $profesionElegida) !== false) {
                pintarTarjeta($revista);
            }
        }
        ?>
    </section>
</main>
<?php include_once __DIR__ .  "/partials/footer.php";?>
</body>
</html>

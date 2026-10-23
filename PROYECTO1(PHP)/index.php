
<?php
require_once "config.php";
require_once "data.php";
require_once "controllers/tarjetas.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= APP_NAME ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1><?= APP_NAME ?></h1>
    <p>Descubre películas del cine nigeriano.</p>

    <section class="peliculas">
        <?php
        if (count($peliculas) > 0):
            foreach ($peliculas as $peli):
                if ($peli["destacado"] === true):
                    pintarTarjeta($peli);
                endif;
            endforeach;
        endif;
        ?>
    </section>

</body>
</html>

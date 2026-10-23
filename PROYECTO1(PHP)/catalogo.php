<?php
session_start();

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/data.php";
require_once __DIR__ . "/controllers/tarjetas.php";

$generoElegido = "Drama";
?>

<?php require __DIR__ . "/partials/header.php"; ?>
<?php require __DIR__ . "/partials/nav.php"; ?>

<main>
    <h1>Catálogo de películas</h1>

    <section class="peliculas">
        <?php
        foreach ($peliculas as $peli) {
            pintarTarjeta($peli);
        }
        ?>
    </section>

    <h2>Películas de <?= $generoElegido ?></h2>

    <section class="peliculas">
        <?php
        foreach ($peliculas as $peli) {
            if (stripos($peli["genero"], $generoElegido) !== false) {
                pintarTarjeta($peli);
            }
        }
        ?>
    </section>
</main>

<?php require __DIR__ . "/partials/footer.php"; ?>

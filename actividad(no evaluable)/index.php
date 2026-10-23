
<?php
require_once __DIR__ . "/clases/VideoJuegos.php";

// Creamos los videojuegos
$juegos = [
    new Videojuego(1, "Minecraft", "Aventura", 19.99, 9, "img/minecraft.webp", 10),
    new Videojuego(2, "FIFA 25", "Deportes", 59.99, 8, "img/fifa.jpeg", 5),
    new Videojuego(3, "The Witcher 3", "RPG", 18.00, 9.5, "img/witcher.jpeg", 3),
    new Videojuego(4, "GTA V", "Accion", 15.00, 9, "img/gta.jpeg", 0),
    new Videojuego(5, "Sonic", "Plataformas", 12.00, 7, "img/sonic.jpeg", 8),
    new Videojuego(6, "Elden Ring", "RPG", 49.99, 9.5, "img/eldenring.jpeg", 4)
];

$totalJuegos = count($juegos);

// Contamos los recomendados
$totalRecomendados = 0;
foreach ($juegos as $juego) {
    if ($juego->filter("recomendado")) {
        $totalRecomendados++;
    }
}

// Contamos los juegos en oferta
$totalOfertas = 0;
foreach ($juegos as $juego) {
    if ($juego->filter("oferta")) {
        $totalOfertas++;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>video juegos</title>
</head>
<body>
    <?php
    

    include __DIR__ . "/partials/header.php";
    include __DIR__ . "/partials/nav.php";
    ?>
<main class="contenedor">

    <section id="todos">
        <h2>Todos los juegos (<?php echo $totalJuegos; ?>)</h2>

        <div class="catalogo">
            <?php
            foreach ($juegos as $juego) {
                $juego->pintarTarjeta();
            }
            ?>
        </div>
    </section>

    
    <section id="recomendados">
        <h2>Juegos recomendados (<?php echo $totalRecomendados; ?>)</h2>

        <div class="catalogo">
            <?php
            foreach ($juegos as $juego) {
                if ($juego->filter("recomendado")) {
                    $juego->pintarTarjeta();
                }
            }
            ?>
        </div>
    </section>

    
    <section id="ofertas">
        <h2>Juegos en oferta (<?php echo $totalOfertas; ?>)</h2>

        <div class="catalogo">
            <?php
            foreach ($juegos as $juego) {
                if ($juego->filter("oferta")) {
                    $juego->pintarTarjeta(true);
                }
            }
            ?>
        </div>
    </section>

</main>

<?php include __DIR__ . "/partials/footer.php"; ?>
</body>
</html>

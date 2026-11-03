<?php

include "classes/Coche.php";

$coches = [
    new Coche(1, "Toyota", "Corolla", 14000, 0, true),
    new Coche(2, "BMW", "Serie 1", 22000, 15000, true),
    new Coche(3, "Seat", "Ibiza", 12000, 0, true),
    new Coche(4, "Ford", "Focus", 10000, 50000, false),
    new Coche(5, "Renault", "Clio", 13500, 10000, true),
    new Coche(6, "Audi", "A3", 28000, 0, false)
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de coches</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f5f8;
            margin: 0;
            color: #263238;
        }

        header {
            background: #1d3557;
            color: white;
            text-align: center;
            padding: 25px;
        }

        main {
            max-width: 1100px;
            margin: auto;
            padding: 20px;
        }

        .coches {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .tarjeta {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 8px #ddd;
        }

        .tarjeta h3 {
            color: #1d3557;
        }

        .oferta {
            border-top: 5px solid #e09f3e;
        }

        h2 {
            margin-top: 35px;
        }
    </style>
</head>

<body>

<header>
    <h1>Catálogo de coches</h1>
    <p>Encuentra tu próximo coche</p>
</header>

<main>

    <!-- 1. Todos los coches -->

    <section>
        <h2>Todos los coches</h2>

        <div class="coches">

            <?php foreach ($coches as $coche): ?>

                <?php $coche->pintarTarjeta(); ?>

            <?php endforeach; ?>

        </div>
    </section>

    <!-- 2. Coches disponibles -->

    <section>
        <h2>Coches disponibles</h2>

        <div class="coches">

            <?php foreach ($coches as $coche): ?>

                <?php if ($coche->filter("disponible")): ?>

                    <?php $coche->pintarTarjeta(); ?>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </section>

    <!-- 3. Coches nuevos -->

    <section>
        <h2>Coches nuevos (0 km)</h2>

        <div class="coches">

            <?php foreach ($coches as $coche): ?>

                <?php if ($coche->filter("nuevo")): ?>

                    <?php $coche->pintarTarjeta(); ?>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </section>

    <!-- 4. Coches en oferta -->

    <section>
        <h2>Coches en oferta - 10% adicional</h2>

        <div class="coches">

            <?php foreach ($coches as $coche): ?>

                <?php if ($coche->filter("oferta")): ?>

                    <article class="tarjeta oferta">

                        <h3>
                            <?= htmlspecialchars($coche->getMarca()) ?>
                            <?= htmlspecialchars($coche->getModelo()) ?>
                        </h3>

                        <p>
                            Precio original:
                            <del>
                                <?= number_format($coche->getPrecio(), 2) ?> €
                            </del>
                        </p>

                        <p>
                            Precio con descuento:
                            <strong>
                                <?= number_format(
                                    $coche->aplicarDescuento(10),
                                    2
                                ) ?> €
                            </strong>
                        </p>

                        <p>
                            <?= number_format(
                                $coche->getKilometros(),
                                0,
                                ",",
                                "."
                            ) ?> km
                        </p>

                    </article>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </section>

</main>

</body>
</html>
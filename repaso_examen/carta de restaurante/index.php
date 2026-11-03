<?php
include "data.php";
include "partials/header.php";

$categorias = ["entrante", "principal", "postre"];
?>

<main>

    <?php foreach ($categorias as $categoria): ?>

        <section>
            <h2><?= ucfirst($categoria) ?>s</h2>

            <div class="platos">

                <?php foreach ($platos as $plato): ?>

                    <?php if ($plato["categoria"] == $categoria): ?>
                        <?php pintarPlato($plato); ?>
                    <?php endif; ?>

                <?php endforeach; ?>

            </div>
        </section>

    <?php endforeach; ?>

    <section>
        <h2>Ofertas especiales</h2>

        <div class="platos">

            <?php foreach ($platos as $plato): ?>

                <?php if ($plato["precio"] <= 10): ?>

                    <article class="tarjeta oferta">
                        <img src="img/<?= htmlspecialchars($plato["imagen"]) ?>"
                             alt="<?= htmlspecialchars($plato["nombre"]) ?>">

                        <div class="contenido">
                            <h3><?= htmlspecialchars($plato["nombre"]) ?></h3>

                            <p><?= htmlspecialchars($plato["descripcion"]) ?></p>

                            <p>
                                Precio original:
                                <del><?= number_format($plato["precio"], 2) ?> €</del>
                            </p>

                            <p class="precio">
                                Oferta:
                                <?= number_format($plato["precio"] * 0.85, 2) ?> €
                            </p>
                        </div>
                    </article>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </section>

</main>

<?php include "partials/footer.php"; ?>
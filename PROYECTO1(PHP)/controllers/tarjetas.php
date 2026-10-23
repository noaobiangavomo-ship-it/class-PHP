
<?php

function pintarTarjeta($item) {
    ?>
    <div class="tarjeta">
        <img
            src="<?= $item["imagen"] ?>"
            alt="<?= $item["titulo"] ?>"
        >

        <h3><?= $item["titulo"] ?></h3>

        <p>Director: <?= $item["director"] ?></p>
        <p>Genero: <?= $item["genero"] ?> </p>
        <p>Año: <?= $item["anyo"] ?> </p>
        <p>Duración: <?= $item["duracion"] ?> </p>
        <p>Destacado: <?= $item["destacado"] ?> </p>
       

    </div>
    <?php
}
?>

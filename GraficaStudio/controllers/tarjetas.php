
<?php

function pintarTarjeta($item) {
    
    ?>
    <div class="tarjeta">
        <img
            src="<?= $item["imagen"] ?>"
            alt="<?= $item["titulo"] ?>"
        >

        <h3><?= $item["titulo"] ?></h3>

        <p>Entrevista: <?= $item["entrevista"] ?></p>
        <p>Profesión: <?= $item["profesion"]?></p>
        <p>Categoría: <?= $item["categoria"] ?></p>
        <p>Año: <?= $item["fecha"] ?></p>
        <p>Destacada: <?= !empty($item["destacado"]) ? "Sí" : "No" ?></p>
       

    </div>
    <?php
};
?>

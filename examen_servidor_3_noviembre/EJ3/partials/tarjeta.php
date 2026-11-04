<?php

$entradasDisponibles = (int) $evento["aforo"] - (int) $evento["vendidas"];

if ((int) $evento["vendidas"] >= (int) $evento["aforo"]) {
    $estado = "Agotado";
} elseif ($entradasDisponibles < ((int) $evento["aforo"] * 0.15)) {
    $estado = "Últimas plazas";
} else {
    $estado = "Disponible";
}

if ((float) $evento["precio"] == 0) {
    $precioFormateado = "Gratis";
} else {
    $precioFormateado = (float) $evento["precio"] . " €";
}

?>

<div class="tarjeta">
    <article class="articulo">
        <div class="cuerpo-articulo">
            <div >
                <p class="fecha"><?= $evento["fecha"] ?></p>
                <h3><?= $evento["titulo"] ?></h3>
                <p class="eventos"><?= $evento["lugar"] ?> - <?= $evento["categoria"]?></p>
                <p class="precio"><strong><?= $precioFormateado ?></strong> </p>
                <p class="estado es-<?= $estado === "Agotado" ? "agotado" : ($estado === "Últimas plazas" ? "ultimas" : "penul") ?>"><?= $estado ?></p>
            </div>
                
           
        </div>
    </article>
</div>

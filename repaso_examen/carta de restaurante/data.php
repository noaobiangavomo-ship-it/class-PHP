<?php

$platos = [
    [
        "id" => 1,
        "nombre" => "Ensalada César",
        "descripcion" => "Lechuga, pollo, parmesano y salsa César.",
        "precio" => 8.50,
        "categoria" => "entrante",
        "alergenos" => ["Gluten", "Leche", "Huevo"],
        "disponible" => true,
        "imagen" => "ensalada.jpg"
    ],
    [
        "id" => 2,
        "nombre" => "Croquetas",
        "descripcion" => "Croquetas caseras de jamón.",
        "precio" => 7.00,
        "categoria" => "entrante",
        "alergenos" => ["Gluten", "Leche", "Huevo"],
        "disponible" => true,
        "imagen" => "croquetas.jpg"
    ],
    [
        "id" => 3,
        "nombre" => "Patatas bravas",
        "descripcion" => "Patatas crujientes con salsa brava.",
        "precio" => 6.00,
        "categoria" => "entrante",
        "alergenos" => [],
        "disponible" => false,
        "imagen" => "patatas.jpg"
    ],
    [
        "id" => 4,
        "nombre" => "Paella",
        "descripcion" => "Arroz tradicional con pollo y verduras.",
        "precio" => 14.50,
        "categoria" => "principal",
        "alergenos" => ["Apio"],
        "disponible" => true,
        "imagen" => "paella.jpg"
    ],
    [
        "id" => 5,
        "nombre" => "Hamburguesa",
        "descripcion" => "Carne, queso, lechuga y tomate.",
        "precio" => 12.00,
        "categoria" => "principal",
        "alergenos" => ["Gluten", "Leche"],
        "disponible" => true,
        "imagen" => "hamburguesa.jpg"
    ],
    [
        "id" => 6,
        "nombre" => "Pasta boloñesa",
        "descripcion" => "Pasta con salsa de tomate y carne.",
        "precio" => 10.00,
        "categoria" => "principal",
        "alergenos" => ["Gluten"],
        "disponible" => true,
        "imagen" => "pasta.jpg"
    ],
    [
        "id" => 7,
        "nombre" => "Tarta de queso",
        "descripcion" => "Tarta cremosa de queso.",
        "precio" => 5.50,
        "categoria" => "postre",
        "alergenos" => ["Leche", "Huevo", "Gluten"],
        "disponible" => true,
        "imagen" => "tarta.jpg"
    ],
    [
        "id" => 8,
        "nombre" => "Helado",
        "descripcion" => "Helado de vainilla y chocolate.",
        "precio" => 4.00,
        "categoria" => "postre",
        "alergenos" => ["Leche"],
        "disponible" => false,
        "imagen" => "helado.jpg"
    ]
];

function pintarPlato($plato)
{
    $clase = $plato["disponible"] ? "" : "no-disponible";

    ?>

    <article class="tarjeta <?= $clase ?>">

        <img src="img/<?= htmlspecialchars($plato["imagen"]) ?>"
             alt="<?= htmlspecialchars($plato["nombre"]) ?>">

        <div class="contenido">
            <h3><?= htmlspecialchars($plato["nombre"]) ?></h3>

            <p><?= htmlspecialchars($plato["descripcion"]) ?></p>

            <p class="precio">
                <?= number_format($plato["precio"], 2) ?> €
            </p>

            <p>
                Alérgenos:
                <?= empty($plato["alergenos"])
                    ? "Ninguno indicado"
                    : htmlspecialchars(implode(", ", $plato["alergenos"])) ?>
            </p>

            <?php if (!$plato["disponible"]): ?>
                <span class="etiqueta">No disponible</span>
            <?php endif; ?>
        </div>

    </article>

    <?php
}
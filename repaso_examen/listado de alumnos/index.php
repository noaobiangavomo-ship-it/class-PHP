<?php

$alumnos = [
    ["nombre" => "Ana", "nota" => 8.5],
    ["nombre" => "Luis", "nota" => 4.2],
    ["nombre" => "Marta", "nota" => 9.5],
    ["nombre" => "Carlos", "nota" => 6.5],
    ["nombre" => "Sofia", "nota" => 3.8],
    ["nombre" => "David", "nota" => 7.2]
];

$notaMedia = 0;
$notaAlta = 0;
$notaBaja = 10;
$alumnoAlta = "";
$alumnoBaja = "";

foreach ($alumnos as $alumno) {

    $notaMedia += $alumno["nota"];

    if ($alumno["nota"] > $notaAlta) {
        $notaAlta = $alumno["nota"];
        $alumnoAlta = $alumno["nombre"];
    }

    if ($alumno["nota"] < $notaBaja) {
        $notaBaja = $alumno["nota"];
        $alumnoBaja = $alumno["nombre"];
    }
}

$notaMedia = $notaMedia / count($alumnos);

function calificacion($nota)
{
    if ($nota < 5) {
        return "Suspenso";
    } elseif ($nota < 7) {
        return "Aprobado";
    } elseif ($nota < 9) {
        return "Notable";
    } else {
        return "Sobresaliente";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas de alumnos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<main class="contenedor">

    <h1>Listado de alumnos</h1>

    <section>
        <h2>Todos los alumnos</h2>

        <div class="alumnos">

            <?php foreach ($alumnos as $alumno): ?>

                <div class="tarjeta">
                    <h3><?= $alumno["nombre"] ?></h3>
                    <p>Nota: <?= $alumno["nota"] ?></p>
                    <p class="calificacion">
                        <?= calificacion($alumno["nota"]) ?>
                    </p>
                </div>

            <?php endforeach; ?>

        </div>
    </section>

    <section>
        <h2>Alumnos suspensos</h2>

        <div class="alumnos">

            <?php foreach ($alumnos as $alumno): ?>

                <?php if ($alumno["nota"] < 5): ?>

                    <div class="tarjeta suspenso">
                        <h3><?= $alumno["nombre"] ?></h3>
                        <p>Nota: <?= $alumno["nota"] ?></p>
                        <p>Suspenso</p>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </section>

    <section class="resumen">
        <h2>Resumen de la clase</h2>

        <p>Nota media: <?= number_format($notaMedia, 2) ?></p>
        <p>Nota más alta: <?= $alumnoAlta ?> (<?= $notaAlta ?>)</p>
        <p>Nota más baja: <?= $alumnoBaja ?> (<?= $notaBaja ?>)</p>
    </section>

</main>

</body>
</html>
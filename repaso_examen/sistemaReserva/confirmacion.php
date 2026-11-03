<?php

session_start();

if (!isset($_SESSION["reserva"])) {
    header("Location: index.php");
    exit;
}

$reserva = $_SESSION["reserva"];

include "partials/header.php";
?>

<main>

    <h2>¡Reserva confirmada!</h2>

    <p>Nombre:
        <?= htmlspecialchars($reserva["nombre"]) ?>
    </p>

    <p>Email:
        <?= htmlspecialchars($reserva["email"]) ?>
    </p>

    <p>Fecha:
        <?= htmlspecialchars($reserva["fecha"]) ?>
    </p>

    <p>Número de personas:
        <?= $reserva["personas"] ?>
    </p>

    <p>Preferencia:
        <?= htmlspecialchars(ucfirst($reserva["preferencia"])) ?>
    </p>

    <p>¡Gracias por reservar con nosotros!</p>

    <a href="index.php">Volver</a>

</main>

<?php include "partials/footer.php"; ?>
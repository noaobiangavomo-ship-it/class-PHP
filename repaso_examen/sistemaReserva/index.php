<?php
include "partials/header.php";

$error = "";

if (isset($_GET["error"])) {

    if ($_GET["error"] == "campos") {
        $error = "Hay campos obligatorios sin rellenar";
    } elseif ($_GET["error"] == "personas") {
        $error = "El número de personas debe ser entre 1 y 10";
    } elseif ($_GET["error"] == "preferencia") {
        $error = "La preferencia seleccionada no es válida";
    }
}
?>

<main>

    <h2>Formulario de reserva</h2>

    <?php if ($error != ""): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form action="controllers/reserva.php" method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>

        <label for="personas">Número de personas:</label>
        <input type="number" name="personas" id="personas"
               min="1" max="10" required>

        <label for="preferencia">Preferencia:</label>
        <select name="preferencia" id="preferencia" required>
            <option value="">Selecciona una opción</option>
            <option value="interior">Interior</option>
            <option value="terraza">Terraza</option>
        </select>

        <button type="submit">Reservar</button>

    </form>

</main>

<?php include "partials/footer.php"; ?>
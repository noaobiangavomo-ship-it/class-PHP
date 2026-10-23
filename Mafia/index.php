<?php

include 'arrays.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Listado de libros</title>
</head>

<body>

    <main class="libros">

        <h1>Listado de Libros</h1>

        <?php

        if (count($Libros) > 0):

            foreach ($Libros as $libro):

        ?>

                <div class="libro">

                    <img src="<?= $libro['imagen']; ?>" 
                         alt="<?= $libro['titulo']; ?>">

                    <h2>
                        <strong>Título:</strong>
                        <?= $libro["titulo"]; ?>
                    </h2>

                    <h3>
                        <strong>Autora:</strong>
                        <?= $libro["Autora"]; ?>
                    </h3>

                    <p>
                        <strong>Plataforma:</strong>
                        <?= $libro["Plataforma"]; ?>
                    </p>

                    <p>
                        <strong>Año:</strong>
                        <?= $libro["anyo"]; ?>
                    </p>

                    <p>
                        <strong>Visualización:</strong>
                        <?= $libro["visualizacion"]; ?>M
                    </p>

                    <p>
                        <strong>Puntuación:</strong>
                        <?= $libro["puntuacion"]; ?> ★
                    </p>

                    <p>
                        <strong>Partes:</strong>
                        <?= $libro["partes"]; ?>
                    </p>

                    <?php if ($libro["disponible"]): ?>

                        <p class="disponible">
                            Disponible
                        </p>

                    <?php else: ?>

                        <p class="no-disponible">
                            No Disponible
                        </p>

                    <?php endif; ?>

                </div>

        <?php

            endforeach;

        endif;

        ?>

        <section>

            <form>

                <h4>Formulario Añadir película</h4>

                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>

                <br><br>

                <label for="universo">Universo:</label>
                <input type="text" id="universo" name="universo" required>

                <br><br>

                <label for="director">Director:</label>
                <input type="text" id="director" name="director" required>

                <br><br>

                <label for="anyo">Año:</label>
                <input type="number" id="anyo" name="anyo" required>

                <br><br>

                <label for="duracion">Duración (minutos):</label>
                <input type="number" id="duracion" name="duracion" required>

                <br><br>

                <label for="puntuacion">Puntuación:</label>
                <input type="number" step="0.1" id="puntuacion" name="puntuacion" required>

                <br><br>

                <label for="disponible">Disponible:</label>
                <input type="checkbox" id="disponible" name="disponible">

                <br><br>

                <label for="imagen">Imagen (URL):</label>
                <input type="url" id="imagen" name="imagen">

                <br><br>

                <input type="submit" value="Agregar Película">

            </form>

        </section>

    </main>

</body>

</html>
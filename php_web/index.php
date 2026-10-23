<?php

$juegos = array(
        ["id" => 1, "nombre" => "Juego 1", "descripcion" => "lorem ipsum dolor sit amet", "categoria" => "Aventura", "imagen" => "https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/homepage1/imgsp3.png", "precio" => 39.50,],
        ["id" => 2, "nombre" => "Juego 2", "descripcion" => "lorem ipsum dolor sit amet", "categoria" => "Acción", "imagen" => "https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/homepage1/imgsp3.png", "precio" => 19.99],
        ["id" => 3, "nombre" => "Juego 3", "descripcion" => "lorem ipsum dolor sit amet", "categoria" => "Sandbox", "imagen" => "https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/homepage1/imgsp3.png", "precio" => 9.99],
        ["id" => 4, "nombre" => "Juego 4", "descripcion" => "lorem ipsum dolor sit amet", "categoria" => "RPG", "imagen" => "https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/homepage1/imgsp3.png", "precio" => 4.95],
        ["id" => 5, "nombre" => "Juego 5", "descripcion" => "lorem ipsum dolor sit amet", "categoria" => "Deporte", "imagen" => "https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/homepage1/imgsp3.png", "precio" => 99.99],
        ["id" => 6, "nombre" => "Juego 6", "descripcion" => "lorem ipsum dolor sit amet", "categoria" => "Aventura", "imagen" => "https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/homepage1/imgsp3.png", "precio" => 55.95],
);

$carrito = array(
        ["juego_id" => 1, "qty" => 3],
        ["juego_id" => 2, "qty" => 1],
        ["juego_id" => 3, "qty" => 5],
);

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primera web PHP</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<main>
    <section class="juegos">

        <?php
        if (count($juegos) > 0):
            foreach ($juegos as $juego):
                ?>

                <div class="item">
                    <span class="category"><?= $juego["categoria"]; ?></span>

                    <img src="<?= $juego['imagen'] ?>" alt="<?= $juego["nombre"]; ?>">

                    <h2 class="title text-center"><?php echo $juego["nombre"]; ?></h2>
                    <p class="description text-center">
                        <?= $juego["descripcion"]; ?>
                    </p>
                </div>

            <?php
            endforeach;
        else:
            ?>
            <div class="no_games">
                <p>No hay juegos disponibles</p>
            </div>
        <?php
        endif;
        ?>

    </section>
</main>

</body>
</html>

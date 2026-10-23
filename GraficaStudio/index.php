<?php
require_once "confing.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>revistas</title>
    <link rel="stylesheet" type="text/css" href="./assets/styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/style_header.css">
</head>
<body>
    <?php include_once __DIR__ .  "/partials/header.php";?>

    <div class="hero">
        <h1><?= APP_NAME ?></h1>
    <p>Graphica es una empresa de marketing y crecimiento empresarial nacida en Guinea Ecuatorial, con la convicción de que aquí también se pueden construir empresas grandes, sólidas y capaces de hablarle al mundo.
     Integramos marketing digital, marketing tradicional, gestión comercial y creación de contenido para transformar el potencial de cada empresa en crecimiento visible y medible.</p>
    </div>
    
    <section class="revista">
        <?php
        if(count($revistas) > 0):
            foreach($revistas as $rev):
                if($rev["destacado"]=== true):
                    pintarTarjeta($rev);
                endif;
            endforeach;
        endif;
        ?>
</section>

</body>
</html>

<?php
require_once __DIR__ . "/array.php";
session_start();
if(!isset($_SESSION["usuario_logged"])){
    header("location: ./index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_dash.css">
    <title>Panel de Control</title>
</head>
<body>
    <section class="dashboard">
        <?php if (count($productos["usuario"]) > 0): ?>
            <?php foreach ($productos["usuario"] as $item): ?>
                <div class="dashboard-opcion">
                    <p><?= $item["total"] ?></p>
                    <p><?= $item["region"] ?></p>
                    <p><strong><?= $item["precio"] ?></strong></p>
                    <p><?= $item["info"] ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay productos para mostrar.</p>
        <?php endif; ?>
    </section>


    <section class="das-list">
        <h1>Products List</h1>

        <section class="botones">
            <div>
                <select id="category" name="Status">
                <option value="status">Status</option>
                <option value="published">Published</option>
                <option value="draft">Draft</option>
                <option value="Inactive">Inactive</option>
               </select>
           
               <select id="category" name="category">
                <option value="all">All categories</option>
                <option value="electronic">Electronic</option>
                <option value="fitnes">Fitness</option>
                <option value="wearables">Wearables</option>
               </select>
           </div>
           <div>
            <button type="submit">+ Add Product</button>
        </div>
        </section>
        
        <?php if (count($productos_list) > 0): ?>
            <?php foreach ($productos_list as $item): ?>
                <div class="dashboard-opciones">
                    <img src="<?= $item['imagen'] ?>" alt="<?= $item['titulo'] ?>">
                    <p><strong><?= $item["titulo"]?></strong></p>
                    <p><smol><?= $item["subtitulo"] ?></smol></p>
                    <p><strong>SKU:</strong> <?= $item["marca"] ?></p>
                    <p><strong>Stock:</strong><?= $item["stock"] ?></p>
                    <p><strong>Price:$</strong><?=  $item["price"] ?></p>
                    <p><?= $item["estado"] ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay productos para mostrar.</p>
        <?php endif; ?>

     </section>

</body>
</html>

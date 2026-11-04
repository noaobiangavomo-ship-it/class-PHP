<?php

require "datos.php";
require "funciones.php";

$valorInventario = valorInventario($productos);
$productoMasCaro = productoMasCaro($productos);
$categorias = agruparPorCategoria($productos);
$productosSinStock = productosSinStock($productos);
$productosOrdenados = ordenarPorPrecio($productos);

$valorInventarioVacio = valorInventario([]);
$productoMasCaroVacio = productoMasCaro([]);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    
    <link rel="stylesheet"  type="text/css" href="Styles.css">
   
</head>
<body>
    <div class="inventario">
        <h1>  COMPONENTES DE PC</h1>
<h2>1. Todos los Componentes</h2>
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr class="<?= (int) $producto["stock"] === 0 ? "table-danger" : "" ?>">
                        <td><?= $producto["nombre"] ?></td>
                        <td><?= $producto["categoria"] ?></td>
                        <td><?= (float) $producto["precio"] ?> €</td>
                        <td><?= $producto["stock"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="resumen">
            <p><strong>2. Valor total del inventario:</strong> <?= (float)$valorInventario  ?> €</p>
            <p><strong>3. Producto más caro:</strong>
                <?php if ($productoMasCaro !== null): ?>
                    <?= $productoMasCaro["nombre"] ?> (<?= (float) $productoMasCaro["precio"] ?> €)
                <?php else: ?>
                    Sin productos
                <?php endif; ?>
            </p>
        </div>

        <h2>4. Productos por Categorías</h2>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Categoría</th>
                    <th>Número de productos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria => $cantidad): ?>
                    <tr>
                        <td><?= $categoria ?></td>
                        <td><?= $cantidad ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>5. sin stock</h2>
        <?php if (empty($productosSinStock)): ?>
            <p>No hay productos sin stock.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($productosSinStock as $producto): ?>
                    <li><?= $producto["nombre"] ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h2>6. ordenados por precio</h2>
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productosOrdenados as $producto): ?>
                    <tr>
                        <td><?= $producto["nombre"] ?></td>
                        <td><?= $producto["categoria"] ?></td>
                        <td><?= (float) $producto["precio"] ?> €</td>
                        <td><?= $producto["stock"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       <h2>7. Comprobación con inventario vació</h2>
        <p class="comprobacion">
            Comprobación: Valor del inventario  = <?= $valorInventarioVacio?> €;
            Producto más caro =
            <?php if ($productoMasCaroVacio === null): ?>
                Sin productos
            <?php else: ?>
                <?= $productoMasCaroVacio["nombre"] ?> (<?= (float) $productoMasCaroVacio["precio"] ?> €)
            <?php endif; ?>
        </p>
    </div>
</body>
</html>

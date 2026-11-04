<?php

function valorInventario(array $productos): float
{
    $total = 0;

    foreach ($productos as $producto) {
        if (isset($producto["precio"], $producto["stock"])) {
            $total += (float) $producto["precio"] * (int) $producto["stock"];
        }
    }

    return (float) $total;
}

function productoMasCaro(array $productos)
{
    if (empty($productos)) {
        return null;
    }

    $productoMasCaro = $productos[0];

    foreach ($productos as $producto) {
        if ((float) $producto["precio"] > (float) $productoMasCaro["precio"]) {
            $productoMasCaro = $producto;
        }
    }

    return $productoMasCaro;
}

function agruparPorCategoria(array $productos): array
{
    $categorias = [];

    foreach ($productos as $producto) {
        $categoria = $producto["categoria"] ?? "sin_categoria";
        $categorias[$categoria] = ($categorias[$categoria] ?? 0) + 1;
    }

    return $categorias;
}

function productosSinStock(array $productos): array
{
    $sinStock = [];

    foreach ($productos as $producto) {
        if ((int) ($producto["stock"] ?? 0) === 0) {
            $sinStock[] = $producto;
        }
    }

    return $sinStock;
}

function ordenarPorPrecio(array $productos): array
{
    $copiados = $productos;

    usort($copiados, function ($apg, $bpg) {
        return (float) $apg["precio"] <=> (float) $bpg["precio"];
    });

    return $copiados;
}

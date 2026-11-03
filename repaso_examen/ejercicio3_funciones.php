<?php

function calcularDescuento($precio, $porcentaje)
{
    if ($porcentaje < 0 || $porcentaje > 100) {
        return $precio;
    }

    $descuento = $precio * $porcentaje / 100;

    return $precio - $descuento;
}

echo calcularDescuento(100, 20) . "<br>"; // 80
echo calcularDescuento(50, 10) . "<br>";  // 45
?>

contar vocales
<?php

function contarVocales($texto)
{
    $texto = strtolower($texto);
    $vocales = "aeiouáéíóú";
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {

        if (strpos($vocales, $texto[$i]) !== false) {
            $contador++;
        }
    }

    return $contador;
}

echo contarVocales("Hola Mundo") . "<br>"; // 4
echo contarVocales("PROGRAMACION") . "<br>"; // 5
?>

 resumir texto
 <?php

function resumir($texto, $limite)
{
    if (strlen($texto) > $limite) {
        return substr($texto, 0, $limite) . "...";
    }

    return $texto;
}

echo resumir("Hola, esto es PHP", 8) . "<br>";
// Hola, es...

echo resumir("Hola", 10) . "<br>";
// Hola
?>
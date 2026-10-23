<?php

$numero1 = 10;
$numero2 = 20;

echo $numero1 + $numero2;
echo "<br>";
echo $numero1 - $numero2;
echo "<br>";
echo $numero1 * $numero2;
echo "<br>";
echo $numero1 / $numero2;
echo "<br>";
echo $numero1 ** $numero2;
echo "<br>";
echo $numero1 % $numero2;
echo "<br>";
$numero1 *= $numero2;
echo "<br>";
$numero1 -= $numero2;
echo "<br>";
$numero1 += $numero2;
$numero2++;
echo "<br>";
$numero1 /= $numero2;
echo "<br>";

// OPERADORES LÓGICOS
/*
 * == Igualación (Comprueba valores)
 * === Igualación (Comprueba valores y tipo)
 * != No es igual (Comprueba valores)
 * !== No es igual (Comprueba valores y tipo)
 *
 * > mayor que
 * < menor que
 * >= mayor o igual que
 * <= menor o igual que
 *
 * && and
 * || or
 * ! not -> El contrario del resultado del boolean
 *
 * ++ incremento
 * -- decremento
 *
 * . Concatenación
 *
 * ?? Null Coalescing
 * ? : Lógica ternaria
 *
 * */

/*
 * $numero1 = 10;
 * $numero2 = 20;
 * */
$numero3 = 12;
// Si número4 es null o no existe, entonces numero5 va a tener asignado el valor de numero3
$numero5 = $numero4 ?? $numero3; // 12
$numero6 = $numero1 ?? $numero5; // 10

// ? :
echo "<br>";
if ($numero1 < $numero5) {
    echo "Número 1 es menor";
}
else {
    echo "Numero 5 es menor";
}

echo "<br>";
echo $numero1 < $numero5 ? "Número 1 es menor" : "Número 5 es menor";

echo "<br>";
// Si numero1 + numero2 es mayor a 30, imprime true, en caso contrario imprime false
echo $numero1 + $numero2 > 30 ? true : false;
echo "<br>";
echo $numero1 + $numero2 > 30;
echo "<br>";

if ($numero1 + $numero2 > 30) {}
elseif ($numero1 + $numero2 <= 30) {}
else {}

if ($numero1 + $numero2 > 30) {}
if ($numero1 + $numero2 <= 30) {}
else {}

switch ($numero1 + $numero2) { // la suma es 30 (10 + 20)
    case 30:{
        echo "Es 30";
        break;
    }
    case 40:{
        echo "Es 40";
        break;
    }
    case 50:{
        echo "Es 50";
        break;
    }
    default:{
        echo "No es ninguno";
        break;
    }
}

echo match ($numero1 + $numero2) {
    30 => "Es 30",
    40 => "Es 40",
    50 => "Es 50",
    default => "No es ninguno",
};
?>
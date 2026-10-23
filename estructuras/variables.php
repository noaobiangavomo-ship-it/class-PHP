<?php

// Esto es un comentario en línea

/*
 *
 * Esto es un
 * comentario
 * en bloque
 *
 * */


echo "<h1 class='mb-3'>Hola mundo</h1>";


/*
 * Tipos de dato: boolean, strings, float, int, arrays, arraysList...
 * */
$mensaje = "Hola ";
echo $mensaje . "Camilo, edad: " . 28;
$bool_val = true;
$edad = 28;
$altura = 1.5;


echo "<br>";
echo print($mensaje);
echo "<br>";

$frutas = ["manzana", "pera", "naranja"];
$frutas2 = Array("plátano", "fresa", "manzana");

print_r($frutas);
echo "<br>";
echo $frutas[0];

$usuario_logged = null;

echo "<br>";
echo "<br>";

echo gettype($mensaje); // String
echo "<br>";
echo gettype($edad); // Integer
echo "<br>";
echo gettype($altura); // Float
echo "<br>";
echo gettype($frutas); // Array
echo "<br>";
echo gettype($frutas[0]); // String
echo "<br>";
echo "<br>";



$numero = "123.5976";

$integro = (int) $numero; // 123
echo $integro;
echo "<br>";
$decimal = (float) $numero; // 123.5976
echo $decimal;
echo "<br>";
$doble = (double) $numero; // 123.5976
echo $doble;


?>
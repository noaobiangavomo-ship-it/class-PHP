<?php

$txt = "hola mundo";
echo $txt;
echo "<br>";
echo "<br>";

echo strlen($txt); // Esto lo utilizamos para saber la longitud de caracteres que tiene un string
echo "<br>";
echo str_word_count($txt); // Saber cuantas palabras tiene un string
echo "<br>";
echo strtoupper($txt); // Transformamos el string completamente en mayúsculas.
echo "<br>";
echo strtolower($txt); // Transformamos el string completamente en minúsculas.
echo "<br>";
echo ucwords($txt); // Transformamos la primera letra de cada palabra en mayúsculas
echo "<br>";
echo ucfirst($txt); // Transformamos la primera letra del string en mayúscula
echo "<br>";

echo json_encode(str_contains($txt, "mundo")); // Saber si contiene el string una palabra. 1 => true
echo "<br>";
echo json_encode(str_starts_with($txt, "mundo")); // Saber si empieza el string con una palabra. 0 => false
echo "<br>";
echo json_encode(str_ends_with($txt, "mundo")); // Saber si finaliza el string con una palabra. 1 => true
echo "<br>";
echo strpos($txt, "mundo"); // Posición empieza la palabra mundo
echo "<br>";
echo str_replace("mundo", "PHP", $txt); // Reemplazamos una palabra por otra.
echo "<br>";

$txt = " hola mundo  ";
echo trim($txt); // Eliminamos espacios del string
echo "<br>";
echo ltrim($txt); // Eliminamos espacios en el lado izq. Del string
echo "<br>";
echo rtrim($txt); // Eliminamos espacios en el lado derecho del string
echo "<br>";

$txt = "Estudiando Entorno Servidor";
print_r(explode(" ", $txt));
echo "<br>";
$arr = explode(" ", $txt);
echo implode(" : ", $arr);
echo "<br>";

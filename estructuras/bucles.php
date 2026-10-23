<?php

$frutas = array(
        "Manzana",
        "Pera",
        "Plátano"
);

echo count($frutas) . " Items en frutas";
echo "<br>";
echo "<br>";


for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . ", INDEX $i" . "<br>";
}

echo "<br>";
echo "<br>";

foreach ($frutas as $item) {
    echo $item . "<br>";
}


echo "<br>";
echo "<br>";

echo json_encode(in_array("Manzana", $frutas)); // Busca dentro de un [] un valor -> true / false
array_push($frutas, "Piña"); // Añade un valor al final del array

echo "<br>";
print_r($frutas);
echo "<br>";
array_pop($frutas); // Borrar último elemento del array
print_r($frutas);
echo "<br>";
array_shift($frutas); // Borrar el primer elemento del array
print_r($frutas);
echo "<br>";
array_unshift($frutas, "uva"); // Añade un valor al principio del array
print_r($frutas);
sort($frutas); // Ordenamos en orden
echo "<br>";
echo "<br>";
print_r($frutas);
echo "<br>";
echo "<br>";
rsort($frutas); // Ordenamos a la inversa -> Reverse Sort
print_r($frutas);


$frutas2 = array(
        "Primero" => "Manzana",
        "Segundo" => "Pera",
        "Tercero" => "Plátano"
);
echo "<br>";
echo "<br>";
echo $frutas2["Primero"];
echo "<br>";
echo "<br>";

foreach ($frutas2 as $key => $value) {
    echo $key . ": " . $value . "<br>";
}


?>




<?php //foreach ($frutas2 as $key => $value): ?>
<!--<div>-->
<!--    <div>-->
<!--        <h2>Sub H2</h2>-->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur deleniti distinctio maiores numquam-->
<!--            quod soluta vitae. Beatae doloribus eligendi, eum excepturi harum itaque minus natus porro quaerat, rerum-->
<!--            sapiente velit.-->
<!--        </p>-->
<!--        <button>Añadir al carrito</button>-->
<!--    </div>-->
<!--</div>-->
<?php //endforeach; ?>
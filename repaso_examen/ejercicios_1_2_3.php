1. fizzbuzz del 1 al 100
<?php

for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i;
    }

    echo "<br>";
}

?>
2. numeros primos del 1 al 100
<?php

for ($numero = 2; $numero <= 100; $numero++) {

    $esPrimo = true;

    for ($divisor = 2; $divisor < $numero; $divisor++) {

        if ($numero % $divisor == 0) {
            $esPrimo = false;
        }
    }

    if ($esPrimo) {
        echo $numero . "<br>";
    }
}
?>
3. piramide 
<?php

$altura = 5;

for ($i = 1; $i <= $altura; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "<br>";
}
?>

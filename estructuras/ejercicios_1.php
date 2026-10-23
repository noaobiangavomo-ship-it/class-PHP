<?php
/*
 * EJERCICIO 1
 *
 * ---------------------------
 *
 * Crea un programa en PHP que controle el acceso de una persona a un gimnasio.
 * El programa debe tener las siguientes variables:
 * - Nombre de la persona
 * - Edad
 * - Típo de membresía (basic, premium o vip)
 * - Si tiene la cuota pagada
 * - Hora actual
 *
 * El programa debe de comprobar
 * 1. La persona debe tener al menor 16 años
 * 2. Debe tener la cuota pagada
 * 3. Si la membresía es basic, solamente puede acceder entre las 08:00 y las 18:00
 * 4. Si es premium puede acceder entre las 07:00 y las 21:00.
 * 5. Si es vip, puede acceder durante todo el horario de apertura, de 06:00 a 23:00
 *
 * Si puede acceder, muestra un mensaje indicando su nombre y tipo de membresía.
 * S no puede acceder, muestra el motivo por el que se le ha denegado el acceso.
 *
 * Condición: Utiliza operadores lógicos para combinar las diferentes condiciones
 *
 * */

<?php
// Nombre de la persona
$nombre = "Carlos";
// Edad de la persona
$edad = 20;
// Tipo de membresía
$membresia = "premium";
// Si ha pagado la cuota
$cuotaPagada = true;
// Hora actual
$hora = 19;
// Primero comprobamos la edad
if ($edad < 16) {

    echo "Acceso denegado: eres menor de 16 años.";

} elseif (!$cuotaPagada) {

    echo "Acceso denegado: la cuota no está pagada.";

} else {

    // Comprobamos el tipo de membresía
    if ($membresia == "basic" && $hora >= 8 && $hora <= 18) {

        echo "Acceso permitido. Nombre: $nombre. Membresía: $membresia";

    } elseif ($membresia == "premium" && $hora >= 7 && $hora <= 21) {

        echo "Acceso permitido. Nombre: $nombre. Membresía: $membresia";

    } elseif ($membresia == "vip" && $hora >= 6 && $hora <= 23) {

        echo "Acceso permitido. Nombre: $nombre. Membresía: $membresia";

    } else {

        echo "Acceso denegado: no puede acceder a esta hora.";
    }
}

/*
 * EJERCICIO 2
 *
 * ---------------------------
 *
 * Una tienda online quiere determinar las condiciones de envío de un pedido.
 *
 * Crea las siguientes variables:
 * - Nombre del cliente
 * - Importe de la compra
 * - Si el cliente es miembro (true / false)
 * - Código de descuento introducido por el cliente (esto hacedlo manual)
 *
 * El programa debe de aplicar las siguientes reglas
 *
 * Envío:
 * 1. Si la compra es igual o superior a PRECIO_ENVIO (el valor es 100), el envío es gratuito
 * 2. Si es inferior a PRECIO_ENVIO, el envío cuesta 6.90€.
 * 3. Si el cliente es miembro, no tendrás en cuenta el PRECIO_ENVIO y el envío siempre será gratuito.
 *
 *Descuento:
 *  Si el código introducido es.
 * - "WELCOME10"            -> 10% de descuento
 * - "VIP20"                -> 20% de descuento
 * - "SUMMER15"             -> 15% de descuento
 * - Cualquier otro código  -> sin descuento
 * - Si no se introduce ningún código, debe de utilizarse un valor por defecto haciendo uso de ??.
 *
 * El programa debe de mostrar (Ejemplo de salida):
 * - Cliente: Carlos
 * - Compra: 125€
 * - Código de descuento: VIP20
 * - Descuento: 20%
 * - Coste del envío: 0€
 * - Total: 100€
 *
 *
 * IMPORTANTE: Primero se aplica el descuento y después se calcula el envío
 * */

<?php

// Nombre del cliente
$nombre = "Carlos";

// Precio de la compra
$compra = 125;

// Si es miembro
$miembro = true;

// Código de descuento
$codigo = "VIP20";

// Precio a partir del cual el envío es gratis
$PRECIO_ENVIO = 100;

// Si no se introduce código, usamos "SIN_CODIGO"
$codigo = $codigo ?? "SIN_CODIGO";

// Calculamos el descuento
if ($codigo == "WELCOME10") {

    $descuento = 10;

} elseif ($codigo == "VIP20") {

    $descuento = 20;

} elseif ($codigo == "SUMMER15") {

    $descuento = 15;

} else {

    $descuento = 0;
}

// Calculamos el dinero que se descuenta
$dineroDescuento = $compra * $descuento / 100;

// Primero aplicamos el descuento
$precioFinal = $compra - $dineroDescuento;

// Calculamos el envío
if ($miembro == true) {

    $envio = 0;

} elseif ($precioFinal >= $PRECIO_ENVIO) {

    $envio = 0;

} else {

    $envio = 6.90;
}
// Calculamos el total
$total = $precioFinal + $envio;
// Mostramos los resultados
echo "Cliente: $nombre<br>";
echo "Compra: $compra €<br>";
echo "Código de descuento: $codigo<br>";
echo "Descuento: $descuento %<br>";
echo "Coste del envío: $envio €<br>";
echo "Total: $total €";

/*
 *
 * Ejercicio 3
Una empresa de transporte quiere calcular el precio de un viaje dependiendo del tipo de transporte utilizado.

Crea las siguientes variables:
- Nombre del cliente.
- Tipo de transporte.
- Distancia recorrida en kilómetros.

Los posibles transportes son:
- bus
- tren
- taxi
- bici

Utiliza match para determinar el precio por kilómetro:

Transporte	Precio por km
bus	            0.20 €
tren   	        0.15 €
taxi	        1.20 €
bici	        0.05 €


El programa debe calcular el precio total.

Además, existen estas condiciones:
1. Si el viaje supera los 50 km, se aplica un descuento del 10 %.
2. Si supera los 100 km, se aplica un descuento del 20 %.
3. Si la distancia es 0 o negativa, debe mostrarse un error.
4. Si el transporte no existe, debe mostrarse un mensaje indicando que el transporte no es válido.


Finalmente, muestra algo similar a (ejemplo de salida):
- Cliente: Marta
- Transporte: tren
- Distancia: 120 km
- Precio por km: 0.15 €
- Precio inicial: 18 €
- Descuento: 20 %
- Precio final: 14.40 €

Para el transporte debes utilizar match, no switch.

 * */

<?php

// Nombre del cliente
$nombre = "Marta";

// Tipo de transporte
$transporte = "tren";

// Distancia del viaje
$distancia = 120;

// Primero comprobamos que la distancia sea correcta
if ($distancia <= 0) {
    echo "Error: la distancia debe ser mayor que 0.";

} else {
    // Con match buscamos el precio según el transporte
    $precioKm = match ($transporte) {
        "bus" => 0.20,
        "tren" => 0.15,
        "taxi" => 1.20,
        "bici" => 0.05,
        default => 0
    };

    // Comprobamos si el transporte existe
    if ($precioKm == 0) {

        echo "Error: el transporte no es válido.";

    } else {

        // Calculamos el precio inicial
        $precioInicial = $distancia * $precioKm;
        // Calculamos el descuento
        if ($distancia > 100) {

            $descuento = 20;
        } elseif ($distancia > 50) {

            $descuento = 10;
        } else {
            $descuento = 0;
        }
        // Calculamos cuánto dinero se descuenta
        $dineroDescuento = $precioInicial * $descuento / 100;
        // Calculamos el precio final
        $precioFinal = $precioInicial - $dineroDescuento;
        // Mostramos los resultados
        echo "Cliente: $nombre<br>";
        echo "Transporte: $transporte<br>";
        echo "Distancia: $distancia km<br>";
        echo "Precio por km: $precioKm €<br>";
        echo "Precio inicial: $precioInicial €<br>";
        echo "Descuento: $descuento %<br>";
        echo "Precio final: $precioFinal €";
    }
}
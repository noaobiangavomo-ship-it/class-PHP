<?php

/*
 *
 * Ejercicio 1
 *
 * ------------------------------
Crear un array CLAVE-VALOR que se llame productos. Este elemento tendrá dentro arrays. Cada array interno tendrá una estructura id, name, price, stock, category. Mínimo 5 items.

Luego, crea otro array llamado carrito. Este array tendrá otros arrays internos. Cada array interno tendrá lo siguiente:

$cart = array(
    ["product_id" => 1, "qty" => 2],
    ["product_id" => 2, "qty" => 5],
    ["product_id" => 3, "qty" => 1],
);

- listar el contenido de productos.

- listar productos sin stock.

- listar solo los productos (info de productos) que estén añadidos en el carrito (cart).

- Listar el nombre y el precio total a pagar de los productos que estén en el carrito.
*/

// Creamos el array de productos
$productos = [

    ["id" => 1, "name" => "Camiseta","price" => 15, "stock" => 10,"category" => "Ropa"],
    [ "id" => 2,"name" => "Pantalón", "price" => 25,  "stock" => 5, "category" => "Ropa"],
    ["id" => 3, "name" => "Zapatillas", "price" => 50, "stock" => 0, "category" => "Calzado"],
    ["id" => 4, "name" => "Gorra", "price" => 10, "stock" => 8, "category" => "Accesorios"],
    ["id" => 5, "name" => "Mochila", "price" => 30, "stock" => 0, "category" => "Accesorios"]
];

// Creamos el carrito
$carrito = [
    ["product_id" => 1, "qty" => 2],
    ["product_id" => 2, "qty" => 5],
    ["product_id" => 3, "qty" => 1]
];
//  listar todos los productos
echo "<h2>Todos los productos</h2>";
foreach ($productos as $producto) {
    echo "ID: " . $producto["id"] . "<br>";
    echo "Nombre: " . $producto["name"] . "<br>";
    echo "Precio: " . $producto["price"] . " €<br>";
    echo "Stock: " . $producto["stock"] . "<br>";
    echo "Categoría: " . $producto["category"] . "<br>";
  echo "<br>";
};

// listar producos sin stock
echo "<h2>Productos sin stock</h2>";
foreach ($productos as $producto) {
    if ($producto["stock"] == 0) {
        echo $producto["name"] . "<br>";
    }
};
// productos que estan en el carrito
echo "<h2>Productos del carrito</h2>";

foreach ($carrito as $productoCarrito) {
    foreach ($productos as $producto) {
        if ($producto["id"] == $productoCarrito["product_id"]) {
            echo "Nombre: " . $producto["name"] . "<br>";
            echo "Precio: " . $producto["price"] . " €<br>";
            echo "Cantidad: " . $productoCarrito["qty"] . "<br>";
            echo "<br>";
        }
    }
};

// 4. nombre y precio total

echo "<h2>Total de cada producto</h2>";

foreach ($carrito as $productoCarrito) {

    foreach ($productos as $producto) {

        if ($producto["id"] == $productoCarrito["product_id"]) {

            // Calculamos precio x cantidad
            $total = $producto["price"] * $productoCarrito["qty"];

            echo "Producto: " . $producto["name"] . "<br>";
            echo "Total: " . $total . " €<br>";
            echo "<br>";
        }
    }
};

/*
 *
 * Ejercicio 2
 *
 * ------------------------------
Tenemos un array llamado $users o $usuarios. este array es bidimensional. La estructura de los arrays internos tiene username, password, role (ADMIN o USER), isActive (true o false).

cuando Pongáis el isActive ponedlo como json_encode(true o false).

Cread una variable array, que tendrá username y un password.

    - Comprobar si el usuario existe en nuestra bbdd ($users). Si no existe al final de toda la comprobación habrá que poner un mensaje que diga "Usuario no existe".
    - Si existe, y la contraseña es incorrecta, poned "Contraseña incorrecta".
    - Si todo coincide, poned "Bienvenido [USERNAME]. Rol [ROL]".
    - Luego crear un array unidimensional, cuya posición 0 sea "Acceso total", la posición 1 será "Acceso limitado".

 *
 * */

// Creamos el array de usuarios
$usuarios = [
    ["username" => "maria", "password" => "1234", "role" => "ADMIN","isActive" => json_encode(true)],
    ["username" => "juan","password" => "abcd","role" => "USER","isActive" => json_encode(true)],
    ["username" => "lucia","password" => "5678","role" => "USER",  "isActive" => json_encode(false)]
];
// Usuario que intenta entrar
$usuarioLogin = [
    "username" => "maria",
    "password" => "1234"
];
// Variable para saber si hemos encontrado al usuario
$usuarioExiste = false;
// Recorremos todos los usuarios
foreach ($usuarios as $usuario) {
    // Comprobamos el nombre de usuario
    if ($usuario["username"] == $usuarioLogin["username"]) {
        $usuarioExiste = true;
        // Comprobamos la contraseña
        if ($usuario["password"] != $usuarioLogin["password"]) {
          echo "Contraseña incorrecta";
        } else {
            echo "Bienvenido " . $usuario["username"] . ". Rol " . $usuario["role"];
        }
    }
}
// Si no hemos encontrado el usuario
if ($usuarioExiste == false) {

    echo "Usuario no existe";
}

// array de accesos
$accesos = [
    "Acceso total",
    "Acceso limitado"
];

// Mostramos el array
echo "<br><br>";
echo $accesos[0];
echo "<br>";
echo $accesos[1];
print_r $accesos

?>
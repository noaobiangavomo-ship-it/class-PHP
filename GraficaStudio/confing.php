<?php
session_start();
define("APP_NAME", "GRAPHICA");
define("APP_VERSION", "1.0.0");
define("RUTA_IMG", "GraficaStudio/img");
const PATH = "/" ;

require_once __DIR__ . "/data.php";
require_once __DIR__ . "/controllers/funciones.php";
// cargar el renderizador para que todas las páginas puedan mostrar tarjetas.
require_once __DIR__ . "/controllers/tarjetas.php";

?>

# Aplicación Web con PHP

---
## Descripción

Vamos a construir una aplicación web completa usando todo lo aprendido hasta ahora. Elige la temática que más te guste:

    Series / Anime
    Deportes
    Restaurante / Carta

La aplicación tendrá páginas públicas que cualquiera puede ver y páginas privadas solo accesibles tras hacer login.

---
## Estructura de archivos

```

/proyecto

├── index.php               <- Página de inicio (pública)

├── catalogo.php            <- Catálogo completo (pública)

├── login.php               <- Formulario de login (pública)

├── dashboard.php           <- Página privada del usuario

├── add_item.php            <- Añadir item — solo ADMIN

│

├── controllers/

│   ├── middleware.php      <- Procesa el login

│   └── logout.php         <- Cierra la sesión

│

├── partials/

│   ├── header.php          <- header compartido entre las páginas que tengan esa estructura

│   ├── nav.php             <- Navegación compartida (Menú de navegación)

│   └── footer.php          <- Pie de página

│

├── data.php                <- Arrays con todos los datos

├── config.php              <- Constantes globales (Este archivo se debe de importar en todos los archivos y en la primera línea)

└── img/                    <- Imágenes del proyecto

```

---
## Datos — data.php

Crea los arrays con mínimo 6 items. Cada item debe tener al menos:

    id
    nombre o titulo
    Mínimo 4 campos propios de tu temática
    imagen
    destacado (true o false)

Crea también un array de usuarios con mínimo 3 usuarios. Debe haber al menos un ADMIN y un USER.


Crea también una función propia que reciba un item como parámetro y pinte su tarjeta en HTML. Úsala en index.php y catalogo.php. El archivo que tendrá esta función podéis crearlo en la carpeta/directorio "controllers/"


```php

function pintarTarjeta($item) { ?>

    <div class="tarjeta">

        <img src="<?= $item["imagen"] ?>" alt="<?= $item["titulo"] ?>">

        <h3><?= $item["titulo"] ?></h3>

        <!-- resto de campos -->

    </div>

<?php }

```

---
## config.php

Define con define() o con const mínimo 3 constantes útiles para tu proyecto:

```php

define("APP_NAME",    "Mi Proyecto");

define("APP_VERSION", "1.0.0");

define("RUTA_IMG",    "img/");

```

---
## Partials — partials/

Los tres archivos deben incluirse con require o include en todas las páginas.


### header.php

### nav.php (Menú de navegación)

    La navegación debe cambiar según el estado de la sesión:

```

    Sin sesión:    Inicio | Catalogo | Login
    Con sesión:  Inicio | Catalogo | Dashboard | Logout
    ADMIN:           Inicio | Catalogo | Dashboard | Añadir item | Logout

```
### footer.php

Pie de página con el nombre de la app y datos/enlaces que queráis añadir aquí.

---
## Páginas

### index.php — Home

    Incluye config.php, data.php y los tres partials
    Muestra una portada con el título y una breve descripción del proyecto
    Lista solo los items que tengan destacado igual a true en formato tarjeta usando la función de data.php

### catalogo.php - Catalogo

    Muestra todos los items en formato tarjeta usando la función de data.php
    Debajo muestra una sección filtrada por alguna categoría de tu temática (por ejemplo: solo acción, solo rock, solo entrantes...)

### login.php - Login

    Formulario que envía los datos a controllers/middleware.php por POST
    Tiene dos campos: username y password
    Si existe $_GET["error"] muestra un mensaje de error visible

### dashboard.php - Privado

    Comprueba al inicio si hay sesión activa, si no redirige a login.php
    Muestra un mensaje de bienvenida con el username y el role del usuario
    Muestra el número total de items del catálogo
    Si el usuario es ADMIN, muestra además un enlace a add_item.php

### add_item.php - Solo ADMIN

    Comprueba al inicio si hay sesión activa y si el rol es ADMIN
    Si no hay sesión redirige a login.php
    Si hay sesión pero no es ADMIN redirige a dashboard.php
    Contiene un formulario con todos los campos del item
    Al enviar el formulario (por POST al mismo archivo), muestra los datos recibidos en pantalla con el mismo estilo de tarjeta del catálogo.

---
## Controllers

### controllers/middleware.php

    Solo acepta peticiones POST - si alguien intenta entrar por GET redirige a index.php
    Incluye data.php para tener acceso al array de usuarios
    Busca el usuario en el array y comprueba la contraseña
    Si todo es correcto guarda en sesión el username y el role y redirige a dashboard.php
    Si hay algún error redirige a login.php?error=1

### controllers/logout.php

    Inicia la sesión con session_start()
    La destruye con session_destroy()
    Redirige a index.php

---

## Requisitos técnicos

    Usa <?= ?> para pintar valores en el HTML
    Usa <?php ?> para la lógica
    Toda la lógica va antes del HTML en cada archivo
    Usa require o include para los partials y data.php, e include para elementos opcionales
    Los estilos van en un archivo style.css aparte

---


## Entrega

Carpeta comprimida en .zip con todos los archivos del proyecto, incluyendo la carpeta img/ con las imágenes.


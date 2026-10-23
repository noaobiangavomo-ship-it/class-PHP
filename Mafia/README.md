# Ejercicio. Películas con PHP

## Descripción

Vamos a crear una página web completa con dos archivos `index.php` y `styles.php` que muestre un catálogo de 
películas de superhéroes. El objetivo es practicar cómo mezclar PHP con HTML para generar contenido dinámico a 
partir de arrays.

---

## Requisitos previos

- XAMPP o similar instalado y funcionando
- El archivo `index.php` dentro de la carpeta `htdocs/nombre-carpeta/`
- Acceder desde el navegador via `http://localhost/nombre-carpeta/`

---

## Estructura de datos

Crea un array llamado `$peliculas` con **mínimo 6 películas**. Cada película debe tener esta estructura:

```php
$peliculas = [
    [
        "id"          => 1,
        "titulo"      => "Iron Man",
        "universo"    => "Marvel",
        "director"    => "Jon Favreau",
        "anyo"        => 2008,
        "duracion"    => 126,
        "puntuacion"  => 7.9,
        "disponible"  => true,
        "imagen"      => "ruta/a/la/imagen.jpg"
    ],
    // ...
];
```

> **[INFO]** En el campo `imagen` pon la ruta relativa a la imagen desde el `index.php`. Por ejemplo: `"img/ironman.jpg"`. 
> Crea una carpeta `img/` y mete ahí todas las imágenes (ya os doy el proyecto creado).

Crea también un array `$whishlist` con **3 películas** que quieres ver, indicando el 'id' de la película y si ya la has visto:

```php
$whishlist = [
    ["pelicula_id" => 1, "vista" => false],
    // ...
];
```

---

## Lo que debe mostrar la página

### Sección 1 — Catálogo completo
Muestra todas las películas en forma de **tarjetas (cards)**. Cada tarjeta debe mostrar:
- La **imagen** de la película
- El **título**
- El **universo** (Marvel / DC)
- El **año** y la **duración**
- La **puntuación**
- Si `disponible` es `false`, muestra una etiqueta visible que diga **"No disponible"**

### Sección 2 — Solo Marvel o solo DC
Muestra en tarjetas únicamente las películas cuyo `universo` sea **Marvel** (o DC, tú eliges). Usa una variable 
`$filtroUniverso = "Marvel"` al principio para definir el filtro.

### Sección 3 — Mejores películas
Muestra solo las películas con una **puntuación de 8 o más**, también en tarjetas.

### Sección 4 — Mi Wishlist
Muestra las películas que están en la whishlist. Para cada una muestra la **imagen, el título, el año y si ya ha sido vista o no**.

> **[INFO]** Para obtener los datos de cada película de la watchlist tendrás que buscar en `$peliculas` por `id`, 
> igual que en los ejercicios anteriores.

### Sección 5 — Formulario "Añadir película"
Diseña un formulario HTML para añadir una nueva película al catálogo. Por ahora el formulario **no tiene que funcionar**, 
solo tiene que estar maquetado y con buen aspecto. Debe tener los siguientes campos:

| Campo | Tipo |
|---|---|
| Título | text |
| Universo (Marvel / DC) | select |
| Director | text |
| Año | number |
| Duración (minutos) | number |
| Puntuación (0-10) | number |
| Imagen | file |
| Disponible | checkbox |
| Botón de envío | submit |

> **[INFO]** No os preocupéis por hacer que el formulario envíe datos. Eso lo veremos en la próxima clase. Por ahora 
> solo debe estar bien diseñado y maquetado.

---

## Requisitos técnicos

- Usa `<?= ?>` para mostrar valores en el HTML
- Usa `<?php ?>` para la lógica (if, for...)
- Toda la lógica de cálculos debe ir **al principio del archivo**, antes del HTML
- Las imágenes deben mostrarse con la etiqueta `<img>` usando el campo `imagen` del array
- La página debe tener estilos CSS propios. No hace falta que sea perfecta, es más que nada para que practiquéis diseño.
- Usa la sintaxis alternativa de PHP dentro del HTML:

```php
<?php if (...) : ?>
    ...
<?php endif; ?>

<?php for (...) : ?>
    ...
<?php endfor; ?>
```

---

## Estructura de archivos sugerida

```
/mi-proyecto
│
├── index.php
└── img/
    ├── ironman.jpg
    ├── batman.jpg
    └── ...
```

---

## Entrega

Dos archivos `index.php` y `styles.css` con todo sus respectivos códigos (PHP + HTML + CSS), junto con la carpeta `img/` 
con las imágenes.

---

## Valoración extra

- Mostrar la puntuación con una estrella ★ delante
- Que las películas no disponibles aparezcan con un estilo visual diferente (opacidad, etiqueta de color...)
- Que las tarjetas tengan un diseño cuidado: sombra, bordes redondeados, hover...
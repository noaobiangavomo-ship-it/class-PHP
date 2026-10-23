<?php
include_once("arrays_a_usar.php");
$filtroUniverso = "Marvel"
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Primer Ejercicio PHP Web</title>
</head>
<body>
<main>
    <h1>Listado de Películas</h1>
 <section class="peliculas" >
    
     <?php
        if (count($peliculas) > 0):
            foreach ($peliculas as $peli):
                // mostrar solo las peliculas marverl
                //if ($peli["universo"] != $filtroUniverso) {
                 //   continue; // Saltar a la siguiente iteración si el universo no coincide
               //}

               // peliculas con mas puntuacion 
               //if ($peli["puntuacion"] < 8.0) {
                  //  continue; // Saltar a la siguiente iteración si la puntuación es menor a 8.0
                //}

                //peliculas que no han sido vistas
                //foreach ($watchlist as $item) {
                  //  if ($item["pelicula_id"] == $peli["id"]) {
                    //    if ($item["vista"] == true) {
                      //      continue 2; // Saltar a la siguiente iteración del bucle externo si la película ya ha sido vista
                        //}
                    //}
                //}
                ?>
              
                 <div class="pelis">

                  <img src="<?= $peli['imagen'] ?>" alt="<?= $peli["titulo"]; ?>">
     
                     <h2> <strong>Titulo: </strong><?= $peli["titulo"]; ?></h2>
                      <h3><strong>Universo: </strong><?= $peli["universo"]; ?></h3>
                      <p><strong>Año: </strong><?= $peli["anyo"]; ?></p>
                      <p><strong>Puntuación: </strong><?= $peli["puntuacion"] ?>★</p>
                      
                    <p class="disponible">
                        <?php 
                        if ($peli["disponible"]) {
                            echo "Disponible";
                        } 
                        ?>
                    </p>
                    <p class="no-disponible"><?php if ($peli["disponible"]== false) {echo "No Disponible";}  ?></p>
       
       
    
   </div>
 <?php
            endforeach;
        endif;
            ?>

 </section>
<section class="formulario"> 
    <form> 
         <h4> Formulario Añadir película</h4>
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="universo">Universo:</label>
        <input type="text" id="universo" name="universo" required><br><br>

        <label for="director">Director:</label>
        <input type="text" id="director" name="director" required><br><br>

        <label for="anyo">Año:</label>
        <input type="number" id="anyo" name="anyo" required><br><br>

        <label for="duracion">Duración (minutos):</label>
        <input type="number" id="duracion" name="duracion" required><br><br>

        <label for="puntuacion">Puntuación:</label>
        <input type="number" step="0.1" id="puntuacion" name="puntuacion" required><br><br>

        <label for="disponible">Disponible:</label>
        <input type="checkbox" id="disponible" name="disponible"><br><br>

        <label for="imagen">Imagen (URL):</label>
        <input type="url" id="imagen" name="imagen"><br><br>

        <input type="submit" value="Agregar Película">

    </section>


</main>

</body>
</html>
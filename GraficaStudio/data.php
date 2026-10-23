<?php
$revistas = [
    ["id" => 1, "titulo" => "K&C Creamy Fruti", "entrevista" => " Graphia Studio",  "profesion" =>"Batidos ", "categoria"=>"Gastronomía", "fecha" => 2026,  "destacado" => true, "imagen" => "img/1.jpeg"],
    ["id" => 2, "titulo" => "Emmanuel Michael", "entrevista" => "Graphia Studio ",  "profesion" =>" Creador de contenido e influencer", "categoria"=>"influencia digital ", "fecha" => 2026,  "destacado" => true, "imagen" => "img/2.jpeg"],
    ["id" => 3, "titulo" => "Saray", "entrevista" => "Graphia Studio ",  "profesion" =>"Cosmóloga ", "categoria"=>" Cosmología", "fecha" => 2026,  "destacado" => true, "imagen" => "img/3.jpeg"],
    ["id" => 4, "titulo" => "Día de las Fuerzas Armadas", "entrevista" => " Graphia Studio",  "profesion" =>"Comunicación institucional ", "categoria"=>" Efemérides", "fecha" => 2026,  "destacado" => true, "imagen" => "img/4.jpeg"],
    ["id" => 5, "titulo" => "Funny Becky", "entrevista" => " Graphia Studio",  "profesion" =>"Creadora de Contenido ", "categoria"=>" Redes Sociales", "fecha" => 2025,  "destacado" => true, "imagen" => "img/6.jpeg"],
    ["id" => 6, "titulo" => "Día de las Fuerzas Armadas", "entrevista" => " Graphia Studio",  "profesion" =>"Comunicación institucional ", "categoria"=>" Efemérides", "fecha" => 2026,  "destacado" => false, "imagen" => "img/7.jpeg"],
    ["id" => 7, "titulo" => "Miss Guinea", "entrevista" => " Graphia Studio",  "profesion" =>"Modelo", "categoria"=>" Modelage", "fecha" => 2026,  "destacado" => true, "imagen" => "img/7.jpeg"],
    
];

$usuarios =[
    ["email" => "emilio@graficastudio.com", "password" => "1234", "rol"=>"ADMIN"],
    ["email" => "luis@graficastudio.com", "password" => "12345", "rol"=>"user"],
    ["email" => "pedro@graficastudio.com", "password" => "123456", "rol"=>"user"],
];



if (!isset($_SESSION["revistas"])){
    $_SESSION["revistas"]= $revistas;
}
//  la sesión contiene también las revistas añadidas desde el panel.
$revistas = $_SESSION["revistas"];
// Mantener las cuentas de ejemplo sincronizadas con estos datos, incluso si
// la sesión se inició antes de actualizar las direcciones de correo.


?> 

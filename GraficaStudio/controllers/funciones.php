<?php  
$user= ["username"=>"emilio", "rol" => "ADMIN"];

function siEstaLogeado(): bool{
 return isset($_SESSION["user"]);
}

function isAdmin():bool{
    return siEstaLogeado() && $_SESSION["user"]["rol"] === "ADMIN";
}
?>

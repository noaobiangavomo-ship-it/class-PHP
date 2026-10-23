<?php
$productos=[
    ["id"=> 1, "name"=>"producto1", "price"=>9.98, "imagen"=> img/casa1.jpeg, "featured"=>true, "ispublished"=>true],
     ["id"=> 2, "name"=>"producto1", "price"=>9.98, "imagen"=> img/casa2.jpeg, "featured"=>true, "ispublished"=>true],
     ["id"=> 3, "name"=>"producto1", "price"=>9.98, "imagen"=> img/casa3.jpeg, "featured"=>true, "ispublished"=>true],
      ["id"=> 4, "name"=>"producto1", "price"=>9.98, "imagen"=> img/casa4.jpeg, "featured"=>true, "ispublished"=>true],


    ]

if (!isset($_SESSION["productos"])){
    $_SESSION["productos"] = $productos
}
?>
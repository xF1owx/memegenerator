<?php 
$url = explode('/', $_SERVER['REQUEST_URI']);
require_once('models/request.php');
require_once('views/creation.html');


$creaMeme = creaMeme($url[4]);
var_dump($creaMeme);
echo "<br>";
var_dump ($creaMeme[0]["name_image"]);
echo "<br>";
echo $creaMeme[0]['name_image'];

echo "<img src='assets/medias/img/".$creaMeme[0]["name_image"]."'>";


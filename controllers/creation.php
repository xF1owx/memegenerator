<?php 

require_once('models/request.php');
require_once('views/creation.html');

var_dump($_GET['action']);

 if ($_GET['action'] == 'creation'){
        

$creaMeme = creaMeme($_GET['id']);
var_dump($_GET['id']);
echo "<br>";
var_dump ($creaMeme[0]["name_image"]);
echo "<br>";
echo $creaMeme[0]['name_image'];

echo "<img src='assets/medias/img/".$creaMeme[0]["name_image"]."'>";


}

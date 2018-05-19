<?php 



require_once('models/request.php');
require_once('views/creation.html');

if (isset($_GET['id'])){

$creaMeme = creaMeme($_GET['id']);

var_dump($creaMeme);

echo "<img class='apercu'src='/memegenerator/assets/medias/img/".$creaMeme[0]["name_image"]."'>";

}


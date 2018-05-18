<?php 



require_once('models/request.php');
require_once('views/creation.html');

if (isset($_GET['id'])){

$creaMeme = creaMeme($_GET['id']);
print_r($creaMeme);

echo "<img src='/memegenerator/assets/medias/img/".$creaMeme[0]["name_image"]."'>";
}


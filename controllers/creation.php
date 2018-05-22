<?php 



require_once('models/request.php');
require_once('views/creation.html');

if (isset($_GET['id'])){

$creaMeme = creaMeme($_GET['id']);

var_dump($creaMeme);

echo "<img class='apercu'src='/memegenerator/assets/medias/img/".$creaMeme[0]["name_image"]."'>";

}

header ("Content-type: image/jpeg");

$image = imagecreatefromjpeg("'/memegenerator/assets/medias/img/".$creaMeme[0]["name_image"]."'");
$miniature = imagescale($image, 350);
imagejpeg($miniature);
imagedestroy($image);


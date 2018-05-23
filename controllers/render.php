<?php 
require_once ('vendor/autoload.php');
require_once('models/request.php');

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, array('cache' => false));

var_dump($_POST);
// $memeRender = 


$idImage = $_POST['idImage'];
$nameImage = creaMeme($idImage);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($nameImage);
echo "<br>";
echo "<br>";
echo "<br>";



$im = imagecreatefromjpeg("assets/medias/img/".$nameImage[0]['name_image']);
imagettftext($image , $text);
// $miniature = imagescale($image, 350);
// imagejpeg($miniature);
// Création de l'image
// $im = imagecreatetruecolor(400, 30);

// Création de quelques couleurs
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);

// Le texte à dessiner

$text = $_POST['saisie'];

// Remplacez le chemin par votre propre chemin de police
$font = 'arial.ttf';

// Ajout d'ombres au texte
imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

// Ajout du texte
imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

// Utiliser imagepng() donnera un texte plus claire,
// comparé à l'utilisation de la fonction imagejpeg()
imagejpeg($im, time());

echo $twig->render('render.html', array( 'im' => $im));

imagedestroy($image);

// echo $twig->render('render.html', array('memeRender' => $memeRender));
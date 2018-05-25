<?php 
require_once ('vendor/autoload.php');
require_once('models/request.php');

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, array('cache' => false));

// var_dump($_POST);
// $memeRender = 

$idImage = $_POST['idImage'];
var_dump($_POST);


$nameImage = creaMeme($idImage);
// var_dump($nameImage);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// var_dump($nameImage);

// echo "<br>";
// echo "<br>";
// echo "<br>";



$im = imagecreatefromjpeg("assets/medias/img/".$nameImage[0]['name_image']);

// echo $twig->render('render.html', array('img' => $im));

// imagettftext($image , $text);
// $miniature = imagescale($image, 350);
// imagejpeg($miniature);
// Création de l'image
// $im = imagecreatetruecolor(400, 30);

// Création de quelques couleurs
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
// imagefilledrectangle($im, 0, 0, 399, 29, $white);

// Le texte à dessiner

$text = $_POST['saisie'];
var_dump($text);


// Remplacez le chemin par votre propre chemin de police
$font = 'assets/Homer_Simpson_Revised.ttf';

// // Ajout d'ombres au texte
// imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

// Ajout du texte
imagettftext($im, 80, 0, 50, 320, $white, $font, $text);

// Utiliser imagepng() donnera un texte plus claire,
// comparé à l'utilisation de la fonction imagejpeg()   
$memeName = time();
uploadMeme($memeName);
$pathMeme = "assets/medias/meme/".$memeName.".jpg";
imagejpeg($im, $pathMeme);

echo $twig->render('render.html', array( 'im' => $pathMeme));

imagedestroy($im);



// echo $twig->render('render.html', array('memeRender' => $memeRender));
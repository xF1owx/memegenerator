<?php 


require_once 'vendor/autoload.php';
require_once('models/request.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array('cache' => false));
// require_once('views/creation.html');


if (isset($_GET['id'])){

	$creaMeme = creaMeme($_GET['id']);

	// var_dump($creaMeme);

	// echo "<img class='apercu'src='/memegenerator/assets/medias/img/".$creaMeme[0]["name_image"]."'>";
	echo $twig->render('creation.html', array('creaMeme' => $creaMeme));

}

header ("Content-type: image/jpeg");

$image = imagecreatefromjpeg("'/memegenerator/assets/medias/img/".$creaMeme[0]["name_image"]."'");
$miniature = imagescale($image, 350);
imagejpeg($miniature);
imagedestroy($image);


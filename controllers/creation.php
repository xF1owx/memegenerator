<?php 


require_once 'vendor/autoload.php';
require_once('models/request.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array('cache' => false));



if (isset($_GET['id'])){

	$creaMeme = creaMeme($_GET['id']);

	
	echo $twig->render('creation.html', array('creaMeme' => $creaMeme));

}



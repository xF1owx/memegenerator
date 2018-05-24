<?php 

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array('cache' => false));
require_once('models/request.php');


$template = $twig->load('main.html');

echo $template->render(array());
<?php

 $url = explode('/', $_SERVER['REQUEST_URI'], 4);

// // j'ai supprimé la limite car le array_supprimait de toute façon le dernier élément même si c'était inférieur a 5
 if(count($url) > 3){
    array_pop($url);
}

//  var_dump($url);
// echo "<br>";
// var_dump($url);
// echo "<br>";
$path = implode('/', $url);
var_dump($path);

switch ($path) {
case '/memegenerator':
case '/memegenerator/' :
require_once('controllers/home.php');
echo "1";
break;

case '/memegenerator/upload':
case '/memegenerator/upload/':
// case '/memegenerator/upload/send':
// case '/memegenerator/upload/send/':

require_once('controllers/upload.php');
echo "2";
break;


case '/memegenerator/creation':
case '/memegenerator/creation/':
require_once('controllers/creation.php');
echo "3";
break;

// default:

// require_once('controllers/404-error.php');
// break;
} 
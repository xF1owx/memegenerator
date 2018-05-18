<?php

require_once('utils/bdd.php');



// insérer le nom de l'image envoyée par l'utilisateur
//  $sql = "INSERT INTO image (name_image) VALUES (\'recup_img_user\')";
function uploadImg($name_image){
    
 	global $bdd;
 	$response=$bdd->prepare("INSERT INTO image(name_image) VALUES (:name_image)");
 	$response->bindParam(":name_image", $name_image, PDO::PARAM_STR);
 	$response->execute();

	$result=$response->fetchAll(PDO::FETCH_ASSOC);

  	return $result;
}


// affichage des 15 dernières images
// $sql = "SELECT id_image FROM `image` ORDER BY `id_image` DESC LIMIT 15";

function showMini(){
	global $bdd;
	$response=$bdd->prepare("SELECT name_image, id_image FROM `image` ORDER BY `id_image` DESC LIMIT 15");
	$response->execute();

	$result=$response->fetchAll(PDO::FETCH_ASSOC);
	
	

	return $result;
}

// function creaMeme(){
// 	global $bdd;
// 	$response=$bdd->prepare("SELECT name_image FROM `image` WHERE `id_image` = :idImage");
// 	$response->execute();

// 	$result=$response->fetchAll(PDO::FETCH_ASSOC);
	
// 	// var_dump($result);

// 	return $result;

// }

// //affiche image séléctionnée dans les miniatures
// // $sql = "SELECT name_image FROM `image` WHERE `id_image`= :idImage";
function creaMeme($id_image){
	global $bdd;
	$response=$bdd->prepare("SELECT name_image, id_image FROM `image` WHERE id_image=:idImage");
	$response->bindParam(":idImage", $id_image, PDO::FETCH_ASSOC);

	$response->execute();

	$result=$response->fetchAll(PDO::FETCH_ASSOC);

	

	

	return $result;
}
 




<?php

require_once('../utils/bdd.php');

// $_FILES['icone']['name']; //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
// $_FILES['icone']['type'] //Le type du fichier. Par exemple, cela peut être « image/png ».
// $_FILES['icone']['size'] //La taille du fichier en octets.
// $_FILES['icone']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
// $_FILES['icone']['error'] //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.

var_dump($_FILES);



 // insérer le nom de l'image envoyée par l'utilisateur
 //  $sql = "INSERT INTO image (name_image) VALUES (\'recup_img_user\')";
 function uploadImg(){
 	global $bdd;
 	$response=$bdd->prepare("INSERT INTO image (name_image) VALUES (:name_image)");
 	$response->bindParam(":name_image", $name_image, PDO::PARAM_INT);
 	$response->execute();

 	$result=$response->fetchAll(PDO::FETCH_ASSOC);

 	return $result;
}

uploadImg();

// affichage des 15 dernières images
// $sql = "SELECT id_image FROM `image` ORDER BY `id_image` DESC LIMIT 15";
function showMini(){
	global $bdd;
	$response=$bdd->prepare("SELECT id_image FROM `image` ORDER BY `id_image` DESC LIMIT 15");
	$response->execute();

	$result=$response->fetchAll(PDO::FETCH_ASSOC);
	
	var_dump($result);

	return $result;
}



//affiche image séléctionnée dans les miniatures
// $sql = "SELECT name_image FROM `image` WHERE name_image=\"rangutan-original.jpg\"";
function showImg($id_image){
	global $bdd;
	$response=$bdd->prepare("SELECT name_image FROM `image` WHERE id_image=:idImage");
	$response->bindParam(":idImage", $id_image, PDO::PARAM_INT);

	$response->execute();

	$result=$response->fetchAll(PDO::FETCH_ASSOC);

	var_dump($result);
	
	return $result;
}



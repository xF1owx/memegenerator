<?php
try{
  
    $bdd=new PDO('mysql:host=localhost;dbname=meme_gen;charset=utf8','root','online@2017');
}
catch(Exeption $e)
{      
	die('Erreur:'.$e->getMessage());
}
    
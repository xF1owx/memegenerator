<?php 
require_once ('vendor/autoload.php');
require_once('models/request.php');

if (!isset($_FILES['upFile'])){

    $loader = new Twig_Loader_Filesystem('./views');
    $twig = new Twig_Environment($loader, array('cache' => false));
}
    
$redirection = false;

if (isset($_FILES['upFile'])){
    
$redirection = true;

    $path = $_SERVER['DOCUMENT_ROOT'].'/memegenerator/assets/medias/imgtemp/'.$_FILES['upFile']['name'];
    move_uploaded_file($_FILES['upFile']['tmp_name'], $path);


    // Définition de la largeur et de la hauteur maximale
    $width = 800;
    $height = 800;


    // Cacul des nouvelles dimensions
    list($width_orig, $height_orig) = getimagesize($path);

    $ratio_orig = $width_orig/$height_orig;

    if ($width/$height > $ratio_orig) {
       $width = intval($height*$ratio_orig);
    } else {
       $height = intval($width/$ratio_orig);
    }
   


    // Redimensionnement
    $image_p = imagecreatetruecolor($width, $height);
    $image = imagecreatefromjpeg($path);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);


    // Enregistrement
    $newName = time().$_FILES['upFile']['name'];
    $newPath = $_SERVER['DOCUMENT_ROOT'].'/memegenerator/assets/medias/img/'.$newName;
    $resultat = imagejpeg($image_p, $newPath);

    //Destruction de l'image temporaire
    imagedestroy($image);



    if ($resultat){

        uploadImg($newName);
        
    }
    else
    {
        echo "transfert non réalisé";
        exit();
    }
}

$result = showMini();
// var_dump($result);
if($redirection === false){
    $template = $twig->loadTemplate('upload.html');
    echo $template->render(array('showMini' => $result));
}else{
    $lastId = lastId();

    header("Location: creation/".$lastId['lastId']);

}




// echo "<div class='container'>";
// for ($i=0; $i<15; $i++){
//    echo "<a href='creation/".$result[$i]["id_image"]."'><img class='miniature' src='assets/medias/img/".$result[$i]["name_image"]."'><a>'";
// //   echo $result[$i]["id_image"];
// }
// echo "</div>";
// href="index.php?action=voirFilm&id=<?php echo($row['id'])
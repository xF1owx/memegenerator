
<?php 

require_once('models/request.php');
require_once('views/upload.html');
// var_dump($_FILES);
// $random = time();
$path = $_SERVER['DOCUMENT_ROOT'].'/memegenerator/assets/medias/img/'.time().$_FILES['upFile']['name'];
$resultat = move_uploaded_file($_FILES['upFile']['tmp_name'], $path);

if ($resultat){
    
   
    uploadImg(time().$_FILES['upFile']['name']);
   
    header('Location: /memegenerator/creation');
    
    
   
}
else
{
    echo "transfert non réalisé";
    exit();
}

$showMini = showMini();



// sleep(3);

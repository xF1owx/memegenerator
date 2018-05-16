<?php 

require_once('models/request.php');
if (!isset($_FILES['upFile'])){

    require_once('views/upload.html');
}
    


if (isset($_FILES['upFile'])){
  
    $path = $_SERVER['DOCUMENT_ROOT'].'/memegenerator/assets/medias/img/'.time().$_FILES['upFile']['name'];
    $resultat = move_uploaded_file($_FILES['upFile']['tmp_name'], $path);

    if ($resultat){

        uploadImg(time().$_FILES['upFile']['name']);
        
    }
    else
    {
        echo "transfert non réalisé";
        exit();
    }
}

// $showMini = showMini();



// sleep(3);
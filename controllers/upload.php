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

$result = showMini();

echo "<div class='container'>";
for ($i=0; $i<15; $i++){
   echo "<a href='creation/".$result[$i]["id_image"]."'><img class='miniature' src='assets/medias/img/".$result[$i]["name_image"]."'><a>'";
//   echo $result[$i]["id_image"];
}
echo "</div>";
// href="index.php?action=voirFilm&id=<?php echo($row['id'])
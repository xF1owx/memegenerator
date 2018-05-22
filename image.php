<?php

    header ("Content-type: image/jpeg");

    $image = imagecreatefromjpeg("'/memegenerator/assets/medias/img/".$creaMeme[0]["name_image"]."'");
    $miniature = imagescale($image, 350);
    imagejpeg($miniature);
    imagedestroy($image);
    
?>
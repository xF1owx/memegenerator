<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body>

    <form id="form" method="post" action="models/request.php" enctype="multipart/form-data">

        <p>

            <input type="hidden" name="MAX_FILE_SIZE" value="32481010">
            <input type="file" name="upFile">    </br> 
            
            <input type="submit" name="upload" value="Envoyer">
        </p>

    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body>

    <form id="idform" autocomplete="off" method="post" action="models/request.php">

        <p>
            <input type="text" name="chemin" placeholder="Path">
            <input type="submit" name="submit" value="Parcourir">
        </p>



        <p>
            <input type="text" name="email" placeholder="Nom du fichier">
            <input type="submit" name="upload" value="Envoyer">
        </p>
    </form>
</body>

</html>
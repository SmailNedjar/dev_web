<?php
include --ROOT--."../include/protect.php";

require_once --ROOT--."../include/connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" style=" width:500px; height:500px">
        <input type="texte" name="titre" style=" width:500px; height:30px">
        <textarea name="description" style=" width:500px; height:300px"></textarea>
        <input type="submit" value="envoyer">
    </form>
</body>
</html>
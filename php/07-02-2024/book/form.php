<?php
include $_SERVER['DOCUMENT_ROOT']."../include/protect.php";

require_once $_SERVER['DOCUMENT_ROOT']."../include/connect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        ul {
            display: flex;
            width:500px;
            justify-content:space-between;
            list-style-type:none ;
        }
    </style>
</head>
<body>
    <form action="process.php" method="get" style=" width:500px; height:80px">
        <input type="texte" name="critere1" style=" width:200px; height:30px">
        <input type="submit" value="envoyer">
    </form>  
     
    <ul>
        <li><a href="form.php?npage=1">1</a></li>
        <li><a href="form.php?npage=2">2</a></li>
        <li><a href="form.php?npage=3">3</a></li>
        <li><a href="form.php?npage=4">4</a></li>
        <li><a href="form.php?npage=5">5</a></li>
        <li><a href="form.php?npage=6">6</a></li>
        <li><a href="form.php?npage=7">7</a></li>
        <li><a href="form.php?npage=8">8</a></li>
        <li><a href="form.php?npage=9">9</a></li>
        <li><a href="form.php?npage=10">10</a></li>
    </ul>
</body>
</html>
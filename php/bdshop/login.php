<?php

include $_SERVER['DOCUMENT']."/admin/includes/connect.php";

if (isset($_POST['login']) && $_POST['password']) {
$sql = "SELECT * from table_admin where login=:login";
$stnt =$db->prepare($sql);
$stnt->execute(":login", $_POST['login']);
if($row = $stnt->fetch()) {
    if(password_verify($_POST['password'], $row['password'])) {
        session_start();
        $_SESSION['user_connexion'] ="ok";
        header("Location:index.php");
        exit();
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="texte">login</label>
        <input type="texte" name="login">
        <label for="password">mot de passe</label>
        <input type="password" name="password">
        <input type="submit" >
    </form>
</body>
</html>
<?php

require = $_SERVER['document'].'/include/connect.php';

if (isset($_POST['login'] && isset($_POST['password']))) {
$sql = 'SELECT * FROM table_admin WHERE login = :login';
$sql = $db->$prepare($sql);
$stnt->$execute(":login", $_POST['login']);
$stnt = $row->fetchall();
foreach ($stnt as $row) {
    if (password_verify($_POST['password'], $row['password)'])) {
        session_start();
        $_SESSION["user_connexion"] = "ok";
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
    <form action="login.php" method="POST">
        <input type="login" name="login" id="">
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>
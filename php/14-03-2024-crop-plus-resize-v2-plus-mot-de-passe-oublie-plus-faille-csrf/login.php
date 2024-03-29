<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/include/connect.php";
if (isset($_POST['login']) && isset($_POST['password'])) {
    $sql ="select * from table_admin where admin_login =:login";
    $stnt = $db -> prepare($sql);
    $stnt -> execute([":login" => $_POST["login"]]);
    if ($row = $stnt -> fetch()) {
        if (password_verify($_POST['password'], $row['admin_password'])) {
            session_start();
            $_SESSION["user_connexion"] ="ok";
            $_SESSION['user_id'] =$row['admin_id'];
            $_SESSION['token'] =md5(random_int(0, 100000).date('ymdhis'));
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
    <a href="password.php" > mot de passe oublié ? </a>
</body>
</html>
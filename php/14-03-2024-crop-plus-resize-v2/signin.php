<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include/connect.php';
echo $_SERVER['HTTP_REFERER'];
if(isset($_POST['subscription_sent']) and $_POST['subscription_sent']="1") {
    $sql= "INSERT INTO table_customer (customer_lastname, customer_mail, customer_password, customer_token) VALUES (:customer_lastname, :customer_mail, :customer_password, :customer_token)";
    $stmt =$db->prepare($sql);
    $stmt->bindvalue(':customer_lastname',$_POST['customer_lastname']);
    $stmt->bindvalue(':customer_mail',$_POST['customer_mail']); 
    $stmt->bindvalue(':customer_password',password_hash($_POST['customer_password'], PASSWORD_DEFAULT));
    $token = md5(random_int(0, 100000)).date('ymdhis');
    $stmt->bindvalue(':customer_token', $token);
    $stmt->execute();
    $id=$db->lastInsertID();

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
    <?php 
    if (!isset($_POST['subscription_sent'])) {?>
    <form action="signin.php" method="post">
        <label for="name">nom</label>
        <input type="text" name="customer_lastname" id="name">
        <label for="mail">email</label>
        <input type="email" name="customer_mail" id="mail">
        <label for="mdp">mot de passe</label>
        <input type="password" name="customer_password" id="mdp"> 
        <input type="hidden" name="subscription_sent" value="1">
        <input type="submit" value="valider">
      </form>
      <?php }
    else {?>
        <p> un email vous a été envoyé</p>
        <a href="signin_confirm.php?id=<?= $id; ?>&token=<?= $token;?>">cliquez ici</a>
    <?php }
      ?>
</body>
</html>
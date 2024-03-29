<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/include/connect.php";
$step=1;
if (!empty($_POST['customer_mail'])) {
    $step=2;
    $sql= "SELECT customer_id FROM table_customer WHERE customer_mail=:customer_mail and customer_status=1 order by customer_id desc";
    $stmt= $db->prepare($sql);
    $stmt->execute([':customer_mail' =>$_POST['customer_mail']]);
    if($row = $stmt->fetch()) {
        $customer_id= $row['customer_id'];
        $token =md5(random_int(0, 100000)).date('ymdhis');
        $sql = "UPDATE table_customer set customer_token=:customer_token where customer_id=:customer_id";
        $stmt = $db->prepare($sql);
        $stmt->bindvalue(':customer_id',$customer_id);
        $stmt->bindvalue(':customer_token',$token);
        $stmt->execute();
        $link = "<a href=\"password.php?id=".$customer_id."&token=".$token."\"> reinitialisr mot de passe </a>";
    }
}
if(!empty($_GET['id']) && !empty($_GET['token'])) {
    $sql = "SELECT customer_id from table_customer where customer_id = :customer_id and customer_token = :customer_token";
    $stmt =$db->prepare($sql);
    $stmt->execute(['customer_id' => $_GET['id'], 'customer_token' => $_GET['token']]);
    if ($row = $stmt->fetch()) {
        $step=3;
        $customer_id=$row['customer_id'];
    }
}

if (!empty($_POST['customer_password']) && !empty($_POST['customer_password_confirm'] && $_POST['customer_password_confirm']== $_POST['customer_password'])) {
    $step=4;
    $sql= "update table_customer set customer_password=:customer_password, customer_token='' where customer_id = :customer_id";
    $stmt=$db->prepare($sql);
    $stmt->execute([':customer_id' => $_POST['customer_id'], ':customer_password' => password_hash($_POST['customer_password'], PASSWORD_DEFAULT)]);
};

?>
<?php if($step==1) { ?>
<form method='post' action='password.php' >
    <label for="login"></label>
    <input type='email' name='customer_mail' id='login' required>
    <input type='submit' value='valider'/>
</form>
<?php }?>

<?php
if ($step==2) {?>
    <p> vous allez recevoir un email</p>
    <?php echo $link;
}

if ($step==3) {?>
    <form action="" method="post">
        <label for="password"></label>
        <input type="password" name="customer_password" id="password"required>
        <label for="customer_password_confirm"></label>
        <input type="password" name="customer_password_confirm" id="customer_password_confirm" required>
        <input type="hidden" value="<?php echo $customer_id;?>" name="customer_id">
        <input type="submit" value="valider">
    </form>
<?php }?>

<?php 
if ($step==4) {?>
    <p>mot de passe reinitialisé avec succes</p>
    <a href="login.php"> se connecter</a>
<?php } ?>





<?php
/*if (!isset($_POST['login']) && !isset($_GET['id'])){
    echo "<form method='post' action='password.php' >
        <input type='texte' name='login'>
        <input type='submit' value='valider'/>
    </form>";
}
if (isset($_POST['login'])){
    $sql = "SELECT * FROM table_customer WHERE customer_mail=:customer_mail ";
    $stmt = $db->prepare($sql);
    $stmt->execute([':customer_mail' => $_POST['login']]);
    if ($row = $stmt->fetch()) {
        $id=$row['customer_id'];
        $token = md5(random_int(0, 100000)).date('ymdhis');
        $sql ="UPDATE table_customer set customer_token=:customer_token where customer_id=:customer_id";
        $stmt=$db->prepare($sql);
        $stmt->bindvalue(':customer_token', $token);
        $stmt->bindvalue(':customer_id', $id);
        $stmt->execute();
        echo "<p>Un email vous a été envoyé</p>";
        echo "<a href='password.php?id=" . $id . "&token=" . $token . "'>Réinitialiser le mot de passe</a>";
    }
}


if (isset($_GET['id']) && isset($_GET['token']) && !empty($_GET['token'])) {

    $sql = "SELECT * FROM table_customer WHERE customer_id=:customer_id and customer_token=:customer_token";
    $stmt = $db->prepare($sql);
    $stmt->bindvalue(':customer_token', $_GET['token']);
    $stmt->bindvalue(':customer_id',  $_GET['id']);
    $stmt->execute();
    if ($srow = $stmt->fetch()) {
        echo "<form method='post' action='password.php'>
            <input type='password' name='password'/>
            <input type='hidden' name='id' value='" . $srow['customer_id'] . "'/>
            <input type='submit' value='valider'/>
            </form>";
    }
    
}
if (isset($_POST['password']) && isset($_POST['id']) && !empty($_POST['password'])) {
    $sql ="UPDATE table_customer set customer_password=:customer_password, customer_token='' where customer_id=:customer_id";
    $stmt = $db->prepare($sql);
    $stmt->bindvalue(':customer_id', $_POST['id']);
    $stmt->bindvalue(':customer_password', password_hash($_POST['password'], PASSWORD_DEFAULT));
    $stmt->execute();
};*/
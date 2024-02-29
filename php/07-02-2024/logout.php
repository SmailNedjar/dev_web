<?php
<?php
session_start();
$_SESSION['user_connexion'] ="";
session_destroy();
header("Location:login.php");
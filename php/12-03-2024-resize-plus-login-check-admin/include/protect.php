<?php 
session_start();
if (!isset($_SESSION['user_connexion']) || $_SESSION['user_connexion']!="ok") {
    header('Location:login.php');
    exit();
}
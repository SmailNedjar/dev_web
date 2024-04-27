<?php

if (!isset($_POST['user_connexion']) && $_POST['user_connexion'] !=="ok") {
    header("Location:../../login.php");
}
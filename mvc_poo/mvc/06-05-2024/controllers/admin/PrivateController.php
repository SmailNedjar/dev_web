<?php

abstract class PrivateController extends Controller {
    public function __construct() {
    session_start();
    if(empty($_SESSION["user_connexion"])) {
        header('Location:http://localhost/mvc_poo/mvc/06-05-2024/public/?controller=home&action=form');
        exit();
    }
    }
}
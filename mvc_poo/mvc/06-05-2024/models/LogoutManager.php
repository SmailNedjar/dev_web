<?php



class LogoutManager {

    public function __construct (){
        session_start();
        $_SESSION["user_connexion"] ="";
        session_destroy();
        
    }

}
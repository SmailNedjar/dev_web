<?php
require '../core/Controller.php';
require '../models/LoginManager.php';


class SecurityController extends Controller
{
    /**
     * Fonction d'action par défaut du controleur "home"
     */

     private LoginManager $loginManager;

    public function __construct() {
        $this->loginManager = (new LoginManager());

    }
    public function login() 
    {   
        if(($this->loginManager->connexion())==true) {;
        $this->render('/home/index.html.php', [
            'title' => 'Vous etes connecté',
        ]);
    }
}
}
<?php
require '../core/Controller.php';
require '../models/LogoutManager.php';


class LogoutController extends Controller
{
    /**
     * Fonction d'action par défaut du controleur "home"
     */

    private LogoutManager $deconnexion;
    public function __construct()
    {
        $this->deconnexion = new LogoutManager();
    }


    public function index() 
    {   
        $this->render('/home/form.html.php', [
            'title' => 'Veuililez vous connecter',
        ]);
    }
}
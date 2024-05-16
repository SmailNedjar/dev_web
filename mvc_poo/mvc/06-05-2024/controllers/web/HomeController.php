<?php
require '../core/Controller.php';
require '../models/LogoutManager.php';
require '../models/BdManager.php';
require '../models/ModifierManager.php';


class HomeController extends Controller
{
    /**
     * Fonction d'action par défaut du controleur "home"
     */

     private BdManager $bdManager;
     private ModifierManager $modifierManager;

     public function __construct()
     {
         $this->bdManager = new BdManager();
         $this->modifierManager = new ModifierManager();
     }
    public function index() 
    {   
        $this->render('home/index.html.php', [
            'title' => 'Bienvenue sur la page d\'accueil'
        ]);
    }

    public function about()
    {
        $this->render('home/about.html.php', [
            'title' => 'À propos de nous',
        ]);
    }


    public function faq()
{   
    $this->render('home/faq.html.php', [
        'title' => 'faq',
    ]);

}

    public function modifier() {
        $results = $this->modifierManager->modifier();
        $this->render('home/modifier.html.php',['recordsetType' => $results['recordsetType'], 'products' => $results['products']]);
    }


    public function form() {
        $this->render('home/form.html.php');
    }
}


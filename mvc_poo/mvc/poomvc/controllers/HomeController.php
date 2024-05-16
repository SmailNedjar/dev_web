<?php
require '../core/Controller.php';

class HomeController extends Controller
{
    /**
     * Fonction d'action par défaut du controleur "home"
     */
    public function index() 
    {
        $this->render('home/index.html.php', [
            'title' => 'Bienvenue sur la page d\'accueil',
        ]);
    }

    public function about()
    {
        $this->render('home/about.html.php', [
            'title' => 'À propos de nous',
        ]);
    }


    function faq()
{   
    $this->render('home/faq.html.php', [
        'title' => 'faq',
    ]);

}
}


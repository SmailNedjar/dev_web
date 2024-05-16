<?php
/**
 * Fonction d'action par défaut du controleur "home"
 */
function index() 
{
    $title = 'Bienvenue sur la page d\'accueil';
    $template = '../views/home/index.html.php'; // Fichier de vue du même nom que l'action dans un dossier du même nom que le controleur

    require '../views/layout.html.php';
}

function about()
{
    $title = 'À propos de nous';
    $template =  '../views/home/about.html.php';

    require '../views/layout.html.php';
}

function faq()
{
    $title = 'faq';
    $template =  '../views/home/faq.html.php';

    require '../views/layout.html.php';
}
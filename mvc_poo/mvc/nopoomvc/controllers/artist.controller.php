<?php

function index()
{
    require '../models/artists.manager.php';
    $artists = getAllArtists();

    $template = '../views/artist/index.html.php';
    require '../views/layout.html.php';
}

// GET & POST
function create()
{   
    // On vérifie que le formulaire est bien envoyé grâce au name du bouton
    if(isset($_POST['create_artist_submit']))
    {
        if(!empty($_POST['artist']['name']))
        {
            // On inclut notre fichier de manager
            require '../models/artists.manager.php';

            // On appel la fonction du manager pour insérer les données en bdd
            if(addArtist($_POST['artist']))
            {

                // Tout s'est bien passé, alors on redirihe l'utilisateur vers la liste des artistes 
                header('Location: http://localhost/mvc_poo/mvc/nopoomvc/public/?controller=artist&action=index');
                exit;
            }
        }
    }

    $template = '../views/artist/create.html.php';
    require '../views/layout.html.php';
}
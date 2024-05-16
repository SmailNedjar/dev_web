<?php

// On inclut dynamiquement le fichier de contrôleur
if(!empty($_GET['controller']))
{
    $controllerName = $_GET['controller'];
}
else
{
    $controllerName = 'home'; // Contrôleur par défaut
}

if(file_exists('../controllers/' . $controllerName . '.controller.php'))
{
    require '../controllers/' . $controllerName . '.controller.php';

    if(!empty($_GET['action']))
    {
        $action = $_GET['action'];
    }
    else
    {
        $action = 'index'; // Action par défaut du contrôleur
    }

    if(function_exists($action))
    {
        $action(); // index() par défaut
    }
    else
    {
        require '../controllers/error.controller.php';
        notFound(); // Action 404
    }

}
else
{
    require '../controllers/error.controller.php';
    notFound(); // Action 404
}


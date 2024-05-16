<?php

require '../core/View.php';

class Controller
{
    
    /**
     * Permet d'afficher le rendu d'une View
     *
     * @param  string $template
     * @param  array $data
     * @return void
     */
    public function render(string $template, array $data = [])
    {
        $view = new View($template, $data);
        $view->render();
    }
}
<?php


function index()
{
    require '../models/track.manager.php';
    $tracks = gettracks();

    $template = '../views/track/index.html.php';
    require '../views/layout.html.php';
}
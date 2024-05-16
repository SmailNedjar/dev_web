<?php

require '../models/AlbumManager.php';
class AlbumController{

    private AlbumManager $albumManager;

    public function __construct() {
        $this->albumManager = new AlbumManager();

    }

function index()
{
    
    $albums = $this->albumManager->getAlbums();

    $template = '../views/album/index.html.php';
    require '../views/layout.html.php';
}

}
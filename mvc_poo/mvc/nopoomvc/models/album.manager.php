<?php

function getAlbums() {

    require '../config/db.connect.php';

    $query = $pdo->query("SELECT * FROM album");
    return $query->fetchAll();
}
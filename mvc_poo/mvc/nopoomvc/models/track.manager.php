<?php

function gettracks() {

    require '../config/db.connect.php';

    $query = $pdo->query("SELECT * FROM track");
    return $query->fetchAll();
}
<?php

require '../config/db.connect.php';

function getAllArtists() {
    global $pdo;
    $query = $pdo->query("SELECT * FROM artist");
    return $query->fetchAll();
}

function getArtist(int $id)
{

}

function addArtist(array $artist){

    global $pdo;
    $query = $pdo->prepare("INSERT INTO artist (name) VALUES (:name)");
    $query->execute($artist);

    return $pdo->lastInsertId();
}

function updateArtist(array $artist)
{

}

function deleteArtist(int $id)
{

}
<?php

require '../config/MysqlConnector.php';

class TrackManager {

    private $db;
    public function __construct() {
        $this->db = (new MysqlConnector())->getConnection();
    }

    public function gettracks() {

        global $pdo;
        $query = $pdo->query("SELECT * FROM track");
        return $query->fetchAll();
    }

}
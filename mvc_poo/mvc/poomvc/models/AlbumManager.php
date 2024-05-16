<?php
require '../config/MysqlConnector.php';


class AlbumManager {
    private $db;
    public function __construct() {
        $this->db = (new MysqlConnector())->getConnection();
    }

    public function getAlbums() {
        $query = $this->db->query("SELECT * FROM album");
        return $query->fetchAll();
}

}
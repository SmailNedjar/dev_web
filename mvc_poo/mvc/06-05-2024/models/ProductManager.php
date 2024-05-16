<?php

require '../config/MySQLConnector.php';

class ProductManager
{
    private $db;

    public function __construct()
    {   
        $this->db = (new MySQLConnector())->getConnection();
    }

    public function getAllProducts()
    {
        $query = $this->db->query("SELECT * FROM table_product");
        return $query->fetchAll();
    }

}

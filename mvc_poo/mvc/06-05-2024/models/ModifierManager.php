<?php

class ModifierManager {

    private $db;
    private array $modifier =[];
    private array $products = [];
    public function __construct() {
        $this->db = (new MySQLConnector())->getConnection();

    }

    public function modifier() {
    $product_name="";
    $product_serie="";
    $product_volume="";
    $product_type_id=0;
    $product_author="";
    $product_publisher="";
    $product_date="";
    $product_price="";
    $product_stock="";
    $product_id=0;
    if(isset($_GET['id']) && $_GET['id']>0) {
        $sql="SELECT * FROM table_product WHERE product_id=:product_id";
        $stmt=$this->db->prepare($sql);
        $stmt->bindValue("product_id", $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        if($row=$stmt->fetch()) {
            $products = [
            'product_name' => $product_name = $row['product_name'],
            'product_serie' => $product_serie =$row['product_serie'],
            'product_volume'=> $product_volume= $row['product_volume'],
            'product_type_id' => $product_type_id =$row['product_type_id'],
            'product_author' => $product_author = $row['product_author'],
            'product_publisher' => $product_publisher = $row['product_publisher'],
            'product_date' => $product_date = $row['product_date'],
            'product_price' => $product_price =$row['product_price'],
            'product_stock'=> $product_stock = $row['product_stock'],
            'product_id' => $product_id = $row['product_id'],
            ];
        }
    }


    $sqlType="SELECT * FROM table_type";
    $stmtType=$this->db->prepare($sqlType);
    $stmtType->execute();
    $recordsetType=$stmtType->fetchAll();
    $this->modifier=['recordsetType'=> $recordsetType,'products'=>$products];
    
    return $this->modifier;
    }
}
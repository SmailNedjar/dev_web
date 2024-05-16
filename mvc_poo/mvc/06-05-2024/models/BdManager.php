<?php

require '../config/MySQLConnector.php';


class BdManager {

    private $db;
    private array $pagination =[];

    public function __construct()
    {   
        $this->db = (new MySQLConnector())->getConnection();
    }

    public function getAllBd()
    {   $nbPerPage=50;
        $page=1;
        if(isset($_GET['p']) && $_GET['p']>0) {
            $page=$_GET['p'];
        }
        $sql="SELECT COUNT(*) AS total FROM table_product";
        $stmt=$this->db->prepare($sql);
        $stmt->execute();
        $row=$stmt->fetch();
        $total=$row['total'];
    
        $sql="SELECT * FROM table_product LEFT JOIN table_type ON table_product.product_type_id=table_type.type_id ORDER BY product_name ASC LIMIT :offset, :limit";
        $stmt=$this->db->prepare($sql);
        $stmt->bindValue(":offset",($page-1)*$nbPerPage, PDO::PARAM_INT);
        $stmt->bindValue(":limit", $nbPerPage, PDO::PARAM_INT);
        $stmt->execute();
        $recordset=$stmt->fetchAll(); 
        $this->pagination=['nombrePageTotal'=> $total,'recordset'=>$recordset, 'nbPerPage' => $nbPerPage];

        return $this->pagination;
    }


}
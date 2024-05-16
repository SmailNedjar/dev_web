<?php

require '../config/MySQLConnector.php';

class LoginManager
{
    private $db;
    private bool $bool=false;

    public function __construct()
    {   
        $this->db = (new MySQLConnector())->getConnection();
    }

    public function connexion()
    {   
        if (isset($_POST['login']) && isset($_POST['password'])) { 
            $sql ="select * from table_admin where admin_login =:login";
            $stmt = $this->db -> prepare($sql);
            $stmt -> execute([":login" => $_POST["login"]]);
            if ($row = $stmt -> fetch()) {
                if (password_verify($_POST['password'], $row['admin_password'])) {
                    session_start();
                    $_SESSION["user_connexion"] ="ok";
                    $_SESSION['user_id'] =$row['admin_id'];
                    $this->bool = true;
                    return $this->bool;
                }
            }
        }
    }
}

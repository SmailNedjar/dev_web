<?php
try {
$db = new PDO("mysql:host=localhost;dbname=dbshop;charset=utf8", "roor", "");
}catch  (PDOException $e)  {
    die("error: " . $e->getMessage());
}

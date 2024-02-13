<?php
include $_SERVER['DOCUMENT_ROOT']."../include/protect.php";

require_once $_SERVER['DOCUMENT_ROOT']."../include/connect.php";


if (isset($_GET['id']) and $_GET['id']>0)  {
$sql ="delete from table_product where product_id=:product_id";
$stnt =$db->prepare($sql);
$stnt->bindValue(":product_id", $_GET['id'], PDO::PARAM_INT);
$stnt->execute();
}

header("location:index.php");
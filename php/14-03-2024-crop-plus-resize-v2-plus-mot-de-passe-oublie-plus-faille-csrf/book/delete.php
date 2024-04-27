<?php
include $_SERVER['DOCUMENT_ROOT']."/include/protect.php";

require_once $_SERVER['DOCUMENT_ROOT']."/include/connect.php";
require "settings.php";

if(isset($_GET['token']) && $_GET['token']==$_SESSION['token']) {


if (isset($_GET['id']) and $_GET['id']>0)  {
    $path = $_SERVER["DOCUMENT_ROOT"]."/upload/product/";
    $sql = "SELECT product_image FROM table_product WHERE product_id=:product_id";
    $stmt = $db -> prepare($sql);
    $stmt->execute ([":product_id" => $_GET['id']]);
    if ($row = $stmt->fetch()) {
        if ($row['product_image']!="") {
            foreach ($images as $image) {
                if (file_exists($path.$image['prefix']."_".$row['product_image'])) {
                    unlink($path.$image['prefix']."_".$row['product_image']);
                }
            }
        }
    }
    $sql ="delete from table_product where product_id=:product_id";
    $stmt =$db->prepare($sql);
    $stmt->bindValue(":product_id", $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
}


}
header("location:index.php");
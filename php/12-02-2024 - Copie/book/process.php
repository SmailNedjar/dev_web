<?php
    include $_SERVER["DOCUMENT_ROOT"]."../include/protect.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."../include/connect.php";

    if(isset($_POST['product_id']) && $_POST['product_id']>0) {
        $sql="UPDATE table_product SET product_name=:product_name, product_serie=:product_serie, product_volume=:product_volume, product_type_id=:product_type_id, product_author=:product_author, product_publisher=:product_publisher, product_date=:product_date, product_price=:product_price, product_stock=:product_stock WHERE product_id=:product_id";
        $stmt=$db->prepare($sql);
        $stmt->bindValue(":product_id", $_POST['product_id']);
    } else {
        $sql="INSERT INTO table_product (product_name, product_serie, product_volume, product_type_id, product_author, product_publisher, product_date, product_price, product_stock) VALUES (:product_name, :product_serie, :product_volume, :product_type_id, :product_author, :product_publisher, :product_date, :product_price, :product_stock)";
        $stmt=$db->prepare($sql);
    }
    $stmt->bindValue(":product_name", $_POST['product_name']);
    $stmt->bindValue(":product_serie", $_POST['product_serie']);
    $stmt->bindValue(":product_volume", $_POST['product_volume']);
    $stmt->bindValue(":product_type_id", $_POST['product_type_id'], PDO::PARAM_INT);
    $stmt->bindValue(":product_author", $_POST['product_author']);
    $stmt->bindValue(":product_publisher", $_POST['product_publisher']);
    $stmt->bindValue(":product_date", $_POST['product_date']);
    $stmt->bindValue(":product_price", $_POST['product_price']);
    $stmt->bindValue(":product_stock", $_POST['product_stock']);
    $stmt->execute();

    header("Location:index.php");
?>
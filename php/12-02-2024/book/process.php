<?php
include $_SERVER["DOCUMENT_ROOT"]."../include/protect.php";
require_once $_SERVER["DOCUMENT_ROOT"]."../include/connect.php";

function generateFilename($filename, $title) {
    $extension=pathinfo($filename, PATHINFO_EXTENSION);

    $arrayko = [" "];
    $arrayok = ["-"];
    $title = str_replace($arrayko, $arrayok, $title);
    return date("Ymdhis")."_".strtolower($title.'.'.$extension);
}

var_dump($_FILES['product_image']);
echo $_FILES['product_image']['name'];


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


if(isset($_FILES['product_image']) && $_FILES['product_image']['tmp_name'] !="") {
    $filename  = generateFilename($_FILES['product_image']['name'], $_POST['product_name']);
    move_uploaded_file($_FILES['product_image']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."../upload/product/".$filename);
    $sql = "update table_product set product_image = :product_image where product_id=:product_id";
    $stnt = $db->prepare($sql);
    $stnt->bindvalue(":product_image", $filename);
    $stnt->bindvalue(":product_id", $_POST['product_id'] >0 ? $_POST['product_id'] : $db->lastInsertID(), pdo::PARAM_INT);
    $stnt->execute();

}



    //header("Location:index.php");
?>
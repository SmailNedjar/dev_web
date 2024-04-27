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


if(isset($_FILES['product_image']) && $_FILES['product_image']['tmp_name'] !="" && $_FILES['product_image']['error'] ==0) {
    $filename  = generateFilename($_FILES['product_image']['name'], $_POST['product_name']);
    $path = $_SERVER["DOCUMENT_ROOT"]."/upload/product/";
    move_uploaded_file($_FILES['product_image']['tmp_name'], $path.$filename);
    var_dump($_FILES['product_image']['type']);
    switch ($_FILES['product_image']['type']) {
        case "image/jpeg" : $imgSrc = imagecreatefromjpeg($path.$filename);
            break;
        case "image/gif"  : $imgSrc = imagecreatefromgif($path.$filename);
            break;
        case "image/png" : $imgSrc = imagecreatefrompng($path.$filename);
            break;
        default : echo "Unknown image type";
            exit();
    }
    $sizes = getimagesize($path.$filename);
    $imgSrcWidth = $sizes[0];
    $imgSrcHeight = $sizes[1];

    $imgDestWidth =800;
    $imgDestHeight =600;

    if ($imgSrcWidth > $imgSrcHeight) {
        $imageDestHeight = round ($imgDestWidth * $imgSrcHeight) / $imgSrcWidth;
    }
    else {
        $imageDestwidth = round($imgDestHeight * $imgSrcWidth) / $imgSrcHeight;
    }
    
    $imgDest = imagecreatetruecolor($imgDestWidth, $imgDestHeight);
    imagecopyresampled($imgDest, $imgSrc,0 , 0 ,0 ,0 ,$imgDestWidth,$imgDestHeight, $imgSrcWidth,$imgSrcHeight);
    switch ($_FILES['product_image']['type']) {
        case 'image/jpeg': imagejpeg($imgDest, $path."lg_".$filename,97);
            break;
        case 'image/png': imagepng($imgDest, $path."lg_".$filename);
            break;
        case 'image/gif': imagegif($imgDest, $path."lg_".$filename, 5);
            break;
    };

    unlink($path.$filename);
   

    
    $sql = "update table_product set product_image = :product_image where product_id=:product_id";
    $stnt = $db->prepare($sql);
    $stnt->bindvalue(":product_image", $filename);
    $stnt->bindvalue(":product_id", $_POST['product_id'] >0 ? $_POST['product_id'] : $db->lastInsertID(), pdo::PARAM_INT);
    $stnt->execute();

}



    //header("Location:index.php");
?>
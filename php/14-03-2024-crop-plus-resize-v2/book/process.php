<?php
include $_SERVER["DOCUMENT_ROOT"]."/include/protect.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/include/connect.php";
require "settings.php";




function generateFilename($filename, $title) {
    $extension=pathinfo($filename, PATHINFO_EXTENSION);
    $title = str_replace(" ", "-", $title);

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
    $path = $_SERVER["DOCUMENT_ROOT"]."/upload/product/";
    if (isset($_POST['product_id']) && $_POST['product_id'] > 0) {
        $sql = "SELECT product_image FROM table_product WHERE product_id=:product_id";
        $stmt = $db -> prepare($sql);
        $stmt -> execute ([":product_id" => $_POST['product_id']]);
        if ($row = $stmt -> fetch()) {
            if ($row['product_image']!="") {
                foreach ($images as $image) {
                    if (file_exists($path.$image['prefix']."_".$row['product_image'])) {
                        unlink($path.$image['prefix']."_".$row['product_image']);
                    }
                }
            }
        }
    }
    $filename  = generateFilename($_FILES['product_image']['name'], $_POST['product_name']);
    move_uploaded_file($_FILES['product_image']['tmp_name'], $path.$filename);
    $prefix="";
    foreach($images as $image) {

        var_dump($_FILES['product_image']['type']);
        switch ($_FILES['product_image']['type']) {
            case "image/jpeg" : $imgSrc = imagecreatefromjpeg($path.$prefix.$filename);
                break;
            case "image/jpg" : $imgSrc = imagecreatefromjpeg($path.$prefix.$filename);
                break;
            case "image/gif"  : $imgSrc = imagecreatefromgif($path.$prefix.$filename);
                break;
            case "image/png" : $imgSrc = imagecreatefrompng($path.$prefix.$filename);
                break;
            default : echo "Unknown image type";
                exit();
        }
        $sizes = getimagesize($path.$prefix.$filename);
        $imgSrcWidth = $sizes[0];
        $imgSrcHeight = $sizes[1];

        $imgDestWidth =$image['width'];
        $imgDestHeight =$image['height'];
        $toResize =true;
            if ($imgSrcWidth > $imgSrcHeight) {
                if ($image['width']==$image['height']) {
                    $imgSrcZoneWidth = $imgSrcHeight;
                    $imgSrcZoneHeight = $imgSrcHeight;
                    $imgSrcZoneX= round(($imgSrcWidth - $imgSrcHeight)/2);
                    $imgSrcZoneY=0;
                }
                else {
                    if ($imgSrcWidth<=$imgDestWidth) {
                        $toResize=false;
                    }
                    else {
                        $imageDestHeight = round ($imgDestWidth * $imgSrcHeight) / $imgSrcWidth;
                        $imgSrcZoneX= 0;
                        $imgSrcZoneY=0;
                        $imgSrcZoneWidth = $imgSrcWidth;
                        $imgSrcZoneHeight = $imgSrcHeight;
                    }
                    
                }
            }
            else {
                if ($image['width']==$image['height']) {
                    $imgSrcZoneWidth = $imgSrcWidth;
                    $imgSrcZoneHeight = $imgSrcWidth;
                    $imgSrcZoneX = 0;
                    $imgSrcZoneY = round(($imgSrcHeight - $imgSrcWidth)/2);
                }
                else {
                    if ($imgSrcWidth<=$imgDestWidth) {
                        $toResize=false;
                    }
                    else {
                        $imageDestwidth = round($imgDestHeight * $imgSrcWidth) / $imgSrcHeight;
                        $imgSrcZoneX= 0;
                        $imgSrcZoneY=0;
                        $imgSrcZoneWidth = $imgSrcWidth;
                        $imgSrcZoneHeight = $imgSrcHeight;
                    }
                    
                }
            }
            if ($toResize ==true) {
                $imgDest = imagecreatetruecolor($imgDestWidth, $imgDestHeight);
                imagecopyresampled($imgDest, $imgSrc,0 , 0 ,$imgSrcZoneX ,$imgSrcZoneY ,$imgDestWidth,$imgDestHeight, $imgSrcZoneWidth, $imgSrcZoneHeight);
                switch ($_FILES['product_image']['type']) {
                    case 'image/jpeg': imagejpeg($imgDest, $path.$image['prefix'].'_'.$filename,97);
                        break;
                    case 'image/jpg': imagejpeg($imgDest, $path.$image['prefix'].'_'.$filename,97);
                        break;
                    case 'image/png': imagepng($imgDest, $path.$image['prefix'].'_'.$filename);
                        break;
                    case 'image/gif': imagegif($imgDest, $path.$image['prefix'].'_'.$filename, 5);
                        break;
                };
            }
            else {
                copy($path.$prefix.$filename, $path.$image['prefix'].'_'.$filename);
            }
            if($image['width'] != $image['height']) {
                $prefix= $image['prefix'].'_';
            }
        }
    unlink($path.$filename);


    
    $sql = "update table_product set product_image = :product_image where product_id=:product_id";
    $stnt = $db->prepare($sql);
    $stnt->bindvalue(":product_image", $filename);
    $stnt->bindvalue(":product_id", $_POST['product_id'] >0 ? $_POST['product_id'] : $db->lastInsertID(), pdo::PARAM_INT);
    $stnt->execute();

}



    //header("Location:index.php");
?>
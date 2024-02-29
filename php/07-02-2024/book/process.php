<?php

if (isset($_POST['product_id']) && $_POST['product_id'] >0) {
    $sql ="update table_product set product_name =:product_name, product_serie =:product_serie, where product_id =:product_id"
    $sql =$db->prepare($sql);
    $stnt->bindvalue(":product_id", POST["product_id"]);

}

else {
    $sql ="insert into table_product (product_name, product_serie) values (:product_name, :product_serie)";
    $stnt=$db->prepare($sql);
}

$stnt ->bindValue(":product_name", POST["product_name"]);
$stnt->bindValue(":product_serie", POST["product_serie"]);
$stnt->execute();
header("Location:index.php");
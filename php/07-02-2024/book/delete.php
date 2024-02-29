<?php

if (isset($_GET['product_id']) && $_GET['product_id'] >0) {
    $sql ="delete from table_products where product_id= :product_id"
    $stnt =$db->prepare($sql);
    $tnt->bindvalue(':product_id',$_GET['product_id']);
    $stnt->execute();
}



header("Location:index.php");
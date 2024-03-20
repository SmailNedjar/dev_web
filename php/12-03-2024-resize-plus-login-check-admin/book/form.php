<?php
    include $_SERVER["DOCUMENT_ROOT"]."../include/protect.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."../include/connect.php";

    $product_name="";
    $product_serie="";
    $product_volume="";
    $product_type_id=0;
    $product_author="";
    $product_publisher="";
    $product_date="";
    $product_price="";
    $product_stock="";
    $product_id=0;
    if(isset($_GET['id']) && $_GET['id']>0) {
        $sql="SELECT*FROM table_product WHERE product_id=:product_id";
        $stmt=$db->prepare($sql);
        $stmt->bindValue("product_id", $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        if($row=$stmt->fetch()) {
            $product_name=$row['product_name'];
            $product_serie=$row['product_serie'];
            $product_volume=$row['product_volume'];
            $product_type_id=$row['product_type_id'];
            $product_author=$row['product_author'];
            $product_publisher=$row['product_publisher'];
            $product_date=$row['product_date'];
            $product_price=$row['product_price'];
            $product_stock=$row['product_stock'];
            $product_id=$row['product_id'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <form action="process.php" method="post" class="container" enctype="multipart/form-data">
        <label for="product_image">image</label>
        <input type="file" name="product_image" id="product_image">
        <label for="product_name">Titre</label>
        <input type="text" class="form-control" id="product_name" name="product_name" value="<?=htmlspecialchars($product_name);?>">
        <label for="product_serie">Série</label>
        <input type="text" class="form-control" id="product_serie" name="product_serie" value="<?=htmlspecialchars($product_serie);?>">
        <label for="product_volume">Volume</label>
        <input type="number" class="form-control" id="product_volume" name="product_volume" value="<?=htmlspecialchars($product_volume);?>">
        <label for="product_type_id">Type</label>
        <select name="product_type_id" id="product_type_id" class="form-control">
            <option value="0">Sélectionnez une catégorie</option>
            <?php $sqlType="SELECT * FROM table_type";
                $stmtType=$db->prepare($sqlType);
                $stmtType->execute();
                $recordsetType=$stmtType->fetchAll();
                foreach($recordsetType as $rowType) { ?>
                    <option value="<?=htmlspecialchars($rowType['type_id']);?>" <?=$rowType['type_id']==$product_type_id?"selected":"";?>>
                        <?=htmlspecialchars($rowType['type_name']);?>
                    </option>
                <?php } ?>
        </select>
<label for="product_author">Auteur</label>
        <input type="text" class="form-control" id="product_author" name="product_author" value="<?=htmlspecialchars((string)$product_author);?>">
        <label for="product_publisher">Editeur</label>
        <input type="text" class="form-control" id="product_publisher" name="product_publisher" value="<?=htmlspecialchars((string)$product_publisher);?>">
        <label for="product_date">Date</label>
        <input type="date" class="form-control" id="product_date" name="product_date" value="<?=htmlspecialchars($product_date);?>">
        <label for="product_price">Prix</label>
        <input type="number" class="form-control" step="0.01" id="product_price" name="product_price" value="<?=htmlspecialchars($product_price);?>">
        <label for="product_stock">Stock</label>
        <input type="number" class="form-control" id="product_stock" name="product_stock" value="<?=htmlspecialchars($product_stock);?>">
        <input type="hidden" name="product_id" value="<?=htmlspecialchars($product_id);?>">
        <br>
        <input type="submit" class="btn btn-primary" value="Enregistrer">
    </form>

</body>
</html>

<?php
include $_SERVER['DOCUMENT'].'../include/protect.php';
include $_SERVER['DOCUMENT'].'../include/connect.php';




$product_name="";
$product_id=0;
$product_serie="";
$product_type_id=0;
if (isset($_GET['id'] && $_GET['id'] >0)) {
    $sql = "SELECT * FROM   table_product where product_id = :product_id";
    $stnt =$db->prepare($db);
    $stnt->bindValue(":product_id", $_GET['id'], PDO::PARAM_INT);
    $stnt->execute();
    if($recordest=$stnt->fetch()) {
        $product_name = $recordset['product_name'];
        $product_serie = $recordset['product_serie'];
        $product_id = $recordset['product_id'];
        $product_type_id = $recordset['product_type_id'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        ul {
            display: flex;
            width:500px;
            justify-content:space-between;
            list-style-type:none ;
        }
    </style>
</head>
<body>
    <form action="process.php" method="post" style=" width:500px; height:80px">
        <input type="texte" name="product_name"  value="<?= htmlspecialchars($product_name);?>" id="product_name" style=" width:200px; height:30px">
        <input type="text" name="product_serie" value="<?= htmlspecialchars($product_serie);?>" id="product_serie" style=" width:200px; height:30px">
        <input type="hidden" name="product_id" value="<?= htmlspecialchars($product_id);?>">
        <select name="product_type_id" id="product_type_id">
            <option value="0">selectionnez une reponse </option>
            <?php
            $sql = "SELECT * FROM table_type";
            $stnt=$db->prepare($sql);
            $stnt->execute();
            $recordest =$stnt->fetchall();
            foreach($recordest as $row) {?>
            <option value="<?= htmlspecialchars($row['type_id']);?>" <?= $row['type_id']==$product_type_id ? "selected" : "";?>> <?php echo htmlspecialchars($row['type_name']);?></option>
            <?php }?>
        </select>
        <input type="submit" value="envoyer">
    </form>  
</body>
</html>
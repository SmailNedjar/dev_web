<?php
include $_SERVER['DOCUMENT_ROOT']."../include/protect.php";

require_once $_SERVER['DOCUMENT_ROOT']."../include/connect.php";

$product_name="";
$product_serie="";
$product_type_id =0;
$product_id=0;
if(isset($_GET['id']) && $_GET['id'] > 0) {
    $sql="SELECT*FROM table_product WHERE product_id=:product_id";
    $stmt=$db->prepare($sql);
    $stmt->bindValue("product_id", $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    if($row=$stmt->fetch()) {
        $product_name=$row['product_name'];
        $product_serie=$row['product_serie'];
        $product_id =$row['product_id'];
        $product_type_id = $row['product_type_id'];

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
        <label for="product_name">titre</label>
        <input type="texte" name="product_name" value="<?= htmlspecialchars ($product_name);?>" id="product_name" style=" width:200px; height:30px">
        <label for="product_serie">serie</label>
        <input type="texte" name="product_serie" value="<?= htmlspecialchars($product_serie); ?>" id="product_serie" style=" width:200px; height:30px">
        <input type="hidden" name="product_id" value="<?= htmlspecialchars($product_id); ?>">
        <label for="product_type_id">type</label>
        <select name='product_type_id' id="product_type_id" >
            <option value="0">selectionnez</option>
            <?php $sqltype   = "SELECT * from table_type";
            $stnttype = $db ->prepare($sqltype);
            $stnttype->execute();
            $recordset = $stnttype ->fetchall();
            foreach ($recordset as $row) {?>
            <option value="<?php echo $rowtype['type_id'];.?>" <?= $rowtype['type_id']==$product_type_id ? "selected": ""; ?>>
            <?= $rowtype['type_name']; ?>
            </option>
            <?php } ?>
            </select>
        <input type="submit"  value="envoyer">
    </form>  
</body>
</html>
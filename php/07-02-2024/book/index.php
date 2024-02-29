<?php
require $_SERVER['DOCUMENT'].'../include/protect.php';
require $_SERVER['DOCUMENT'].'../include/connect.php';

$nparpage=50;

$page= (isset($_GET['page']) && $_GET['page'] >0 ? $_GET['page'] : 1 );

$sql = "SELECT count(*) as total FROM table_product";
$stnt = $db->prepare($sql);
$stnt->execute();
$recordset = $stnt->fetch();

$total = ceil($recordset['total']/$nparpage);


$sql = "SELECT * FROM table_product order by product_id ASC limit : offset, :limit";
$sql=$db->prepare($sql);
$stnt->bindValue(':offset',($page - 1)* $nparpage, PDO::PARAM_INT);
$stnt->bindValue(':limit',$nparpage, PDO::PARAM_INT);
$recordset = $stnt->fetchall();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th scope="col">couverture</th>
                <th scope="col">serie</th>
                <th scope="col">titre</th>
                <th scope="col">prix</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($recordset as $row) { ?>
            <tr>
                <td>
                    <img src="../upload/product/xs_<?php echo htmlspecialchars($row['product_image']);?>" alt="couverture du livre : <?php echo htmlspecialchars($row['product_name']);?>">
                </td>

                <td> <?php echo htmlspecialchars($row['product_serie'])?></td>
                <td> <?= htmlspecialchars($row['product_name'])?></td>
                <td> <?= htmlspecialchars($row['product_price'])?></td>
                <td>
                    <a href="form.php?id=<?= $row['product_id'];?>;">modifier</a>
                    <a href="delete.php?id= <?= $row['product_id'];?>">effacer</a>
                </td>
            </tr>
      <?php }?>
      </tbody>
    <table>
        <ul>
            <?php foreach ($i=1; $i <=$total; $i++) {?>
                <li> <a href="index.php?page=<?= $i; ?>"> <?= $i; ?></a></li>
            <?php }?>
        </ul>
</body>
</html>
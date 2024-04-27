<?php

include $_SERVER['DOCUMENT'].'../includes/protect.php';
include $_SERVER['DOCUMENT'].'../includes/connect.php';

if (isset($_GET['page'])? $_GET['page'] : 1);

$page= $_GET['page'];
$nbparpage = 50;

$sql = "SELECT count(*) as total FROM table_product";
$stnt =$db->prepare($sql);
$stnt->execute();
$row = $stnt->fetch();

$total =ceil($row['total'] / $nbparpage);


$sql = "SELECT * FROM table_product order by product_id limit: offset, :limit";
$stnt = $db->prepare($sql);
$stnt->bindvalue(':offset', ($page - 1) * $nbparpage, PDO::PARAM);
$stnt->bindvalue(':limit', $nbparpage);
$recordset=$stnt->fetchall();


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
                <?php foreach ($recordset as $row) { ?>
                    <tr>
                        <td><img src="../../upload/product/xs_<?= $row['product_image'];?>" alt="image couverture de : <?= $row['product_name'];?>"></td>
                        <td><?= $row['product_serie'];?>"> </td>
                        <td><?php echo htmlspecialchars($row['product_name']);?></td>
                        <td><?= htmlspecialchars($row['product_price']);?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php
        for ($i=0; $i<$total; $i++) { ?>
            <a href="index.php?page=<?= $i; ?>"> <?php echo $i; ?></a>
            <?php } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Couverture</th>
                <th scope="col">Titre</th>
                <th scope="col">Série</th>
                <th scope="col">Volume</th>
                <th scope="col">Auteur</th>
                <th scope="col">Editeur</th>
                <th scope="col">Date</th>
                <th scope="col">Prix</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>
                <th><a class="btn btn-secondary" href="form.php">ajouter</a></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($recordset as $row) { ?>
                <tr>
                    <td><?php if($row['product_image']!="") { ?><img src="../upload/product/xs_<?=htmlspecialchars($row['product_image']);?>" alt="Couverture de la BD :<?=htmlspecialchars($row['product_name']);?>" width="50"><?php } ?></td>
                    <td><?=htmlspecialchars($row['product_name']);?></td>
                    <td><?=htmlspecialchars($row['product_serie']);?></td>
                    <td><?=htmlspecialchars($row['product_volume']);?></td>
                    <td><?=htmlspecialchars((string)$row['product_author']);?></td>
                    <td><?=htmlspecialchars((string)$row['product_publisher']);?></td>
                    <td><?=htmlspecialchars($row['product_date']);?></td>
                    <td><?=htmlspecialchars($row['product_price']);?></td>
                    <td><?=htmlspecialchars($row['product_stock']);?></td>
                    <td><a class="btn btn-primary" href="http://localhost/mvc_poo/mvc/06-05-2024/public/?controller=home&action=modifier&id=<?= htmlspecialchars($row['product_id']);?>">modifier</a>
                    <button class="btn btn-danger" data-id="<?php echo htmlspecialchars($row['product_id']);?>">supprimer </buton></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <ul class="pagination justify-content-center">
        <?php 
        for($i=1; $i<= ceil($nombrePageTotal/$nbPerPage); $i++) { ?>
            <li class="page-item"><a class="page-link" href="http://localhost/mvc_poo/mvc/06-05-2024/public/?controller=home&action=bd&p=<?=$i;?>"><?=$i;?></a></li>
        <?php 
        } ?>
    </ul>
</body>
</html>
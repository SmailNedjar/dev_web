<?php
    include $_SERVER["DOCUMENT_ROOT"]."/include/protect.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/include/connect.php";

    $nbPerPage=50;
    $page=1;
    if(isset($_GET['p']) && $_GET['p']>0) {
        $page=$_GET['p'];
    }
    $sql="SELECT COUNT(*) AS total FROM table_product";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $row=$stmt->fetch();
    $total=$row['total'];

    $sql="SELECT * FROM table_product LEFT JOIN table_type ON table_product.product_type_id=table_type.type_id ORDER BY product_name ASC LIMIT :offset, :limit";
    $stmt=$db->prepare($sql);
    $stmt->bindValue(":offset",($page-1)*$nbPerPage, PDO::PARAM_INT);
    $stmt->bindValue(":limit", $nbPerPage, PDO::PARAM_INT);
    $stmt->execute();
    $recordset=$stmt->fetchAll(); /* On récupère tous les enregistrements */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos bandes dessinées</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <span id="token" style="display:none"><?php echo $_SESSION['token'];?></span>
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
                    <td><a class="btn btn-primary" href="form.php?id=<?= htmlspecialchars($row['product_id']);?>">modifier</a>
                    <button class="btn-delete btn-danger" data-id="<?php echo htmlspecialchars($row['product_id']);?>">supprimer </buton></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <ul class="pagination justify-content-center">
        <?php for($i=1;$i<=ceil($total/$nbPerPage);$i++) { ?>
            <li class="page-item"><a class="page-link" href="index.php?p=<?=$i;?>"><?=$i;?></a></li>
        <?php } ?>
    </ul>
    <dialog id="modal-delete"> 
        <p>
            confirmez vous la suppresion ?
        </p>
        <button id="modal-cancel">
            cancel
        </button>
        <a id="modal-confirm"> valider</a>
    </dialog>
</body>
<script>
let btns = document.querySelectorAll(".btn-delete");
btns.forEach((btn) => {
    btn.addEventListener("click", () =>{
        document.getElementById('modal-confirm').setAttribute("href", "delete.php?id=" + btn.getAttribute("data-id") + "&token=" + document.getElementById("token").innerText);
        document.getElementById('modal-delete').style.display="block"; 
    });    
});


document.getElementById("modal-cancel").addEventListener("click", () => {
document.getElementById("modal-delete").style.display="none";
})
</script>
</html>
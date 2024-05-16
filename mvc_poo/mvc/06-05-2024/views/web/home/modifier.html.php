<?php 

?>

<form action="process.php" method="post" class="container" enctype="multipart/form-data">
    <label for="product_image">image</label>
    <input type="file" name="product_image" id="product_image">
    <label for="product_name">Titre</label>
    <input type="text" class="form-control" id="product_name" name="product_name" value="<?=htmlspecialchars($products['product_name']);?>">
    <label for="product_serie">Série</label>
    <input type="text" class="form-control" id="product_serie" name="product_serie" value="<?=htmlspecialchars($products['product_serie']);?>">
    <label for="product_volume">Volume</label>
    <input type="number" class="form-control" id="product_volume" name="product_volume" value="<?=htmlspecialchars($products['product_volume']);?>">
    <label for="product_type_id">Type</label>
    <select name="product_type_id" id="product_type_id" class="form-control">
        <option value="0">Sélectionnez une catégorie</option>
        <?php 
            foreach($recordsetType as $rowType) { 
                ?>
                <option value="<?=htmlspecialchars($rowType['type_id']);?>" <?=$rowType['type_id']==$products['product_type_id']?"selected":"";?>>
                    <?=htmlspecialchars($rowType['type_name']);?>
                </option>
            <?php } ?>
    </select>
    <label for="product_author">Auteur</label>
    <input type="text" class="form-control" id="product_author" name="product_author" value="<?=htmlspecialchars((string)$products['product_author']);?>">
    <label for="product_publisher">Editeur</label>
    <input type="text" class="form-control" id="product_publisher" name="product_publisher" value="<?=htmlspecialchars((string)$products['product_publisher']);?>">
    <label for="product_date">Date</label>
    <input type="date" class="form-control" id="product_date" name="product_date" value="<?=htmlspecialchars($products['product_date']);?>">
    <label for="product_price">Prix</label>
    <input type="number" class="form-control" step="0.01" id="product_price" name="product_price" value="<?=htmlspecialchars($products['product_price']);?>">
    <label for="product_stock">Stock</label>
    <input type="number" class="form-control" id="product_stock" name="product_stock" value="<?=htmlspecialchars($products['product_stock']);?>">
    <input type="hidden" name="product_id" value="<?=htmlspecialchars($products['product_id']);?>">
    <br>
    <input type="submit" class="btn btn-primary" value="Enregistrer">
</form>
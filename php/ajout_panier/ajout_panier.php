    <?php
require_once 'include/connect.php';

    $sql = 'SELECT table_cart.cart_quantity FROM table_cart WHERE cart_product_id =:cart_product_id';
    $stnt =$db->prepare($sql);
    $stnt->execute([':cart_product_id' => $_POST['data-id']]);

    if ($recordset = $stnt->fetch()) {
        $quantity = $recordset['cart_quantity'] +1;
        $sql ='UPDATE table_cart set cart_quantity =:cart_quantity where cart_product_id =:cart_product_id';
        $stmt=$db->prepare($sql);
        $stmt->execute([':cart_quantity' => $quantity, ':cart_product_id' => $_POST['data-id']]);
    }
    
    else {
        $sql = 'INSERT INTO table_cart (cart_product_id) VALUES (:cart_product_id)';
        $stmt=$db->prepare($sql);
        $stmt->execute([':cart_product_id' => $_POST['data-id']]);
    }
        
$sql ="SELECT  table_cart.cart_quantity, table_product.product_name, table_product.product_image, table_cart.cart_product_id from table_cart left join table_product on table_cart.cart_product_id = table_product.product_id";
$stmt=$db->prepare($sql);
$stmt->execute();
$row=$stmt->fetchAll();
echo json_encode($row);







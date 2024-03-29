<?php

include $_SERVER['DOCUMENT_ROOT']   . '/include/connect.php';

if (isset($_GET['id']) && !empty($_GET['token'])) {
    $sql="SELECT * FROM table_customer where customer_id=:id and customer_token=:token";
    $stmt=$db->prepare($sql);
    $stmt->execute([":id" => $_GET['id'],":token" => $_GET['token']]);
    if ($row = $stmt->fetch()) {
        $sql ="UPDATE table_customer set customer_status=1, customer_token='', customer_subscription_date=:date where customer_id=:id";
        $stmt=$db->prepare($sql);
        $stmt->execute([":id" => $_GET['id'], ":date" => date("y-m-d")]);
    }
    else {
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
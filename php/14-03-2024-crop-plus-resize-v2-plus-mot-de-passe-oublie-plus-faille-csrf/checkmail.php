<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include/connect.php';
$total=0;

if(!empty($_POST['mail'])) {
$sql = "SELECT * from table_customer where customer_mail=:customer_mail";
$stmt = $db->prepare($sql);
$stmt->execute([':customer_mail' => $_POST['mail']]);

if ($row=$stmt->fetch()) {
    $total=1;
    echo $total;
}};

<?php
  include $_SERVER['DOCUMENT_ROOT']."/include/connect.php";
  if (isset($_GET['login'])) {
    $sql = "SELECT COUNT(*) AS total FROM table_admin WHERE admin_login=:login";
    $stmt = $db->prepare($sql);
    $stmt->execute([":login"=>$_GET['login']]);
    $row = $stmt->fetch();
    echo $row['total'];
  }; 
?>
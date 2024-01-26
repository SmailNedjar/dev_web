<?php
try {
$db = new PDO("mysql:host=localhost;dbname=france;charset=utf8", "root", "");
}catch (PDOException $e) {
    die("Error: " . $e->getMessage);
}

$sql = "select * from departement where departement_code=:num";
$stnt = $db -> prepare($sql);
$stnt -> execute([":num" => $_GET["champ2"]]);
$recordset = $stnt -> fetchall();

foreach ($recordset as $row) {
    echo htmlspecialchars($row["departement_nom"])." ";
}




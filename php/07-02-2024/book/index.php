<?php

include --ROOT--."include/protect.php";

require_once --ROOT--."include/connect.php";

$sql = "SELECT * FROM table_book order by book_title ASC";
$stnt = prepare($sql);
$stnt = $db -> prepare($sql);
$stnt = execute();
$recorset = $stnt -> fetchall();


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
        <?php
            foreach ($recorset as $row) { ?>
            <tr>
                <td>
                    <?php echo htmlspecialchars($row['book_title']);?>  <?php // equivalent echo <?=  ?>
                </td>
            </tr>
        <?php } ?>
    ?>   
    <table>
</body>
</html>
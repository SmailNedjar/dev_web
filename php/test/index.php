<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo"hello"?></h1> 
<ul>
    <?php for ($i=1;$i<=100;$i++) {
            echo"<li> liste" . $i . "</li>";
        }
    ?>
</ul>

    <ul>
        <?php for ($i=1;$i<=100;$i++) {?>
            <li> <?php echo $i; ?></li>
            <?php } ?>
    
</body>
</html>
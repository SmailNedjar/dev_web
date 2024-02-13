    <?php

require_once $_SERVER['DOCUMENT_ROOT'] . "../include/connect.php";

// Nom du cookie

if (isset($_GET['critere1'])) {

    $nom_cookie = "cookie";

    // Valeur du cookie
    $valeur_cookie = $_GET['critere1'];

    // Durée de vie du cookie (en secondes)
    $duree_vie = time() + 3600; // Expire dans 1 heure

    // Chemin d'accès du cookie (optionnel, par défaut le cookie est accessible depuis tout le site)
    $chemin = "/";

    // Créer le cookie en utilisant la fonction setcookie()
    setcookie($nom_cookie, $valeur_cookie, $duree_vie, $chemin);
    header("Location: process.php");

}

else if (isset ($_GET['critere2'])) {
    $nom_cookie = "cookie";

    // Valeur du cookie
    $valeur_cookie = $_GET['critere2'];
    
    // Durée de vie du cookie (en secondes)
    $duree_vie = time() + 3600; // Expire dans 1 heure
    
    // Chemin d'accès du cookie (optionnel, par défaut le cookie est accessible depuis tout le site)
    $chemin = "/";
    
    // Créer le cookie en utilisant la fonction setcookie()
    setcookie($nom_cookie, $valeur_cookie, $duree_vie, $chemin);
    header("Location: process.php");


}
if (isset($_COOKIE['cookie'])) {
    // Cookie présent, afficher sa valeur
    echo "Valeur du cookie : " . $_COOKIE['cookie'];
} else {
    // Cookie non présent, afficher un message
    echo "Le cookie n'est pas défini.";
}




// Redirection vers la même page pour recharger


$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit; // Correction du calcul de l'offset

$sql = "SELECT * FROM article";

if (isset($_COOKIE['cookie']) && !empty($_COOKIE['cookie'])) {
    $critere = "%" . $_COOKIE['cookie']. "%";
    $sql .= " WHERE descArt LIKE ?";
    
}

$sql .= " LIMIT $limit OFFSET $offset"; // Ajout de LIMIT et OFFSET à la requête SQL

$stnt = $db->prepare($sql);

if (isset($_COOKIE['cookie']) && !empty($_COOKIE['cookie'])) {
    $stnt->bindValue(1, $critere); // Lier la valeur du critère si elle est définie
}   

$stnt->execute();
$recordset = $stnt->fetchAll();


?>
 <form action="process.php" method="GET" style=" width:500px; height:80px">
        <input type="texte" name="critere2"   style=" width:200px; height:30px">

        <input type="submit" value="envoyer">
    </form>  
<?php 
echo $_COOKIE['cookie'];
foreach ($recordset as $row) {
    ?>
    <table>
        <tr>
            <td>
                <?php echo $row['descArt']; ?>
            </td>
        </tr>
    </table>
    

<?php } ?>
<ul>
        <li><a href="process.php?page=1">1</a></li>
        <li><a href="process.php?page=2">2</a></li>
        <li><a href="process.php?page=3">3</a></li>
        <li><a href="process.php?page=4">4</a></li>
        <li><a href="process.php?page=5">5</a></li>
        <li><a href="process.php?page=6">6</a></li>
        <li><a href="process.php?page=7">7</a></li>
        <li><a href="process.php?page=8">8</a></li>
        <li><a href="process.php?page=9">9</a></li>
        <li><a href="process.php?page=10">10</a></li>
    </ul>

<?php

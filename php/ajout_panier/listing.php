<?php

require_once 'include/connect.php';
$cmpt=1;
$sql = 'SELECT * FROM table_product limit 100, 50';
$stmt=$db->prepare($sql);
$stmt->execute();
$recordset=$stmt->fetchAll();
echo "<div class=\"super_container\"><div class='container'>";
$cmpt=1;
foreach ($recordset as $row) {
    echo "<div><h3>". $row['product_name']."</h3>";
    echo "<div class=\"image\"><img src=\"upload/product/xs_".$row['product_image']."\" alt=\"image couverture ".$row['product_name']."\"></div>";
    echo "<button class=\"ajout_panier\" id=\"btn_panier$cmpt\" data-id=".$row['product_id']."\">Ajouter au panier</button></div>";
    $cmpt++;
}
echo "</div><div id=\"panier\"><h2>panier</h2></div><div class=\"float\"></div></div>";

?>
<style> 
    .super_container {
        display:flex;
    }
    .float {
        height: 0%;
        float:none;
    }
    .image {
        height:260px;
    }
    .container {
        display:flex;
        flex-wrap:wrap;
        width:70%;
        margin-left:40px;
    }
    .container div {
        width :200px;
        display:flex;
        flex-direction:column;
        text-align:center;
        align-items:center;
    }
    #panier {
       border: 1px solid #ccc;
       width:24%;
       float:left;
       text-align: center;
    }
    #panier h2 {
        font-weight:bold;
        font-size:28px;
    }
    h3 {
        width: 150px;
        height: 80px;
        margin-top:130px;
    }

    img {
        width: 150px;
    }
</style>

<script>
   document.addEventListener('DOMContentLoaded', () => {
    let boutons = document.querySelectorAll("button.ajout_panier");
    let panier = document.getElementById('panier');

    boutons.forEach(function (bouton) {
        bouton.addEventListener('click', () => {
            const formData = new FormData();
            formData.append('data-id', bouton.getAttribute("data-id"));

            fetch("ajout_panier.php", {
                method: "POST",
                body: formData,
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                // Vérifier si le produit existe déjà dans le panier
                data.forEach(item => {
                    let produitExistant = false;
                    panier.querySelectorAll(".produit").forEach(function(produit) {
                        if (produit.dataset.id == item.cart_product_id) {
                            produitExistant = true;
                            console.log(item.cart_quantity);
                            produit.innerHTML = item.product_name;
                            produit.innerHTML += "<br/><img src=\"/upload/product/xs_" + item.product_image + "\">";
                            produit.innerHTML += "<p>"+ item.cart_quantity + "</p>";

                        }
                    });

                    // Si le produit n'existe pas encore, l'ajouter au panier
                    if (!produitExistant) {
                        let nouveauProduit = document.createElement("div");
                        nouveauProduit.classList.add("produit");
                        nouveauProduit.dataset.id = item.cart_product_id;
                        nouveauProduit.innerHTML = item.product_name;
                        nouveauProduit.innerHTML += "<br/><img src=\"upload/product/xs_" + item.product_image + "\">";
                        nouveauProduit.innerHTML += "<p>"+ item.cart_quantity + "</p>";
                        panier.appendChild(nouveauProduit);
                    }
                });
            });
        });
    });
});


</script>

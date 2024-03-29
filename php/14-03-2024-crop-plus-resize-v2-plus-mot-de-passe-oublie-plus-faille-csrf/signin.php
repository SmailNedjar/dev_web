<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include/connect.php'; 
if(isset($_POST['subscription_sent']) and $_POST['subscription_sent']=="1") {
    $sql= "INSERT INTO table_customer (customer_lastname, customer_mail, customer_password, customer_token) VALUES (:customer_lastname, :customer_mail, :customer_password, :customer_token)";
    $stmt =$db->prepare($sql);
    $stmt->bindvalue(':customer_lastname',$_POST['customer_lastname']);
    $stmt->bindvalue(':customer_mail',$_POST['customer_mail']); 
    $stmt->bindvalue(':customer_password',password_hash($_POST['customer_password'], PASSWORD_DEFAULT));
    $token1 = md5(random_int(0, 100000)).date('ymdhis');
    $stmt->bindvalue(':customer_token', $token1);
    $stmt->execute();
    $id=$db->lastInsertID();

}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .formulaire {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 500px;
            margin: 10px;
            border-radius: 50px;
            background: linear-gradient(145deg, #ffffff, #e6e6e6);
            padding-top: 15px
        }
        input {
            width: 100%;
        }
        h2 {
            margin-top: 50px;
            color: white;
            font-size: 90px;
        }
    </style>
</head>
<body class="bg-info d-flex align-items-center flex-column">
    <h2 class="text-uppercase text-center mb-5">Sign in</h2>
    <div class="formulaire">
        <?php
        if (!isset($_POST['subscription_sent'])){ ?>
            <form action="signin.php" method="post" class="d-flex align-items-center flex-column grid gap-2">
                <label for="name" class="fs-5 mt-2">Nom</label>
                <input name="customer_lastname" type="text" id="name" require>
                <label for="mail" class="fs-5 mt-2">Mail</label>
                <input name="customer_mail" type="email" id="mail" >
                <label for="pwd" class="fs-5 mt-2">Mot de passe</label>
                <input name="customer_password" type="password" id="pwd" require>
                <br>
                <input type="submit" value="Envoyer" class="btn btn-info btn-block btn-lg gradient-custom-4 text-body submit">
                <input type="hidden" name="subscription_sent" value="1">
                <br>
            </form>
        <?php } else { ?>
            <div>
                <p>Un mail de confirmation vous a été envoyé, merci de bien cliquer sur le lien</p>
                <!-- Normalement le lien n'est pas ici mais dans le mail -->
                <a href="signin_confirm.php?id=<?=$id;?>&token=<?=$token1;?>">Cliquez-ici</a>
            </div>
        <?php } ?>
    </div>
    <script>
  document.addEventListener("DOMContentLoaded", function() {          // va attendre que le DOM ait fini de charger
    document.getElementById("mail").addEventListener("change", function() {
      let formData = new FormData();
      formData.append("mail", this.value);
      fetch("checkMail.php", {
        method:"POST",
        body:formData
      })
      .then(function(response) {return response.text();})
      .then(function(data) {
        if(data!=0) {
            console.log(data);
          alert("Déjà inscrit");
        }
      });
    });
  });
</script>
</body>
</html>
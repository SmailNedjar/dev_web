<?php
if (isset($_POST["champ1"])) {
    echo $_POST["champ1"];
    echo "<br>";
    echo $_POST["champ2"];

}

if (isset($_POST["form1"]) && $_POST["form1"] == "sent") {

    echo "<br>";
    echo $_POST["form1"];
}
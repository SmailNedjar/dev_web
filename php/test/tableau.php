<?php
    $tableau = [1,2,3,4,5,6,7,8,9];

    for ($i = 0; $i < count($tableau); $i++) {
        echo $tableau[$i];
    }
    echo " ";

    foreach ($tableau as $case) {
        echo $case;
    }


    $tableau = ["prenom"=>"Noel", "nom"=>"bob"];
        echo " ".$tableau["nom"];

    foreach ($tableau as $key => $val) {
        echo " ".$key.": ".$val;
    }


    $tableau = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16]
    ];

    for ($i = 0; $i < count($tableau); $i++) {
        for ($j = 0; $j < count($tableau); $j++) {
            echo " ".$tableau[$i][$j];
    }
    }



    $tableau = [
        ["nom" =>"doe", "prenom" =>"john"],
        ["nom" =>"doe", "prenom" =>"john"],
        ["nom" =>"doe", "prenom" =>"john"]
    ];

?>


<table>
    <thead>
        <tr>
            <th>
                Nom
            </th>
            <th>
                prenom
            </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tableau as $row) {
        echo "<tr><td>".$row["nom"]."</td>";
        echo "<td>".$row["prenom"]."</td></tr>";
    }
    ?>
    </tbody>
</table>

<style>
    table td {
        border: 1px solid black;
    }    
</style>
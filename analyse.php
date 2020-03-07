<?php include 'php/head.php'; ?>
<title>Loup-Garou - Analyses</title>




<body class="LG_Black_Background">
    <?php include 'php/navbar.php'; ?>
    <?php include 'php/database.php'; ?>


    <br><br><br>
    <h1 class="container bold"> Analyse des Résultats </h1>
    <br><br>

    <table class="container">

        <!-- TITRES-->
        <tr class="bold">
            <td>Faction</td>
            <td>Rôle</td>
            <td>Nombre de Parties Jouées</td>
            <td>% d'apparition</td>
            <td>Nombre de victoires</td>
            <td>% de victoires</td>
        </tr>

        
        <!-- TITRES -->
        <?php
            $conn = connect();
            
            $sql = "SELECT ID FROM Partie";
            $result = $conn->query($sql);

            $nombrePartie = 0;
            while($val = $result->fetch_assoc())
                $nombrePartie++;

            echo '<h3> Nombre total de parties : ' . $nombrePartie . '</h3><br><br><br>';


            // On itère à travers toutes les factions
            $sql = "SELECT * FROM Faction";
            $result = $conn->query($sql);


            // Pour chaque faction, on liste les rôles
            while($val = $result->fetch_assoc())
            {
                $faction_ID = $val["ID"];
                $faction_Nom = $val["Name"];


                $sql_2 = "SELECT ID, ID_Faction, Name FROM Role WHERE ID_Faction = " . $faction_ID;
                $result_2 = $conn->query($sql_2);


                // Pour chaque rôle, on affiche ses stats
                while($val_2 = $result_2->fetch_assoc())
                {
                    //DEBUT
                    echo '<tr>';


                    // FACTION
                    echo '<td> ' . $faction_Nom . '</td>';

                    // NOM
                    echo '<td> ' . $val_2["Name"] . '</td>';


                    // CALCUL...
                    $jouees = 0;
                    $victoire = 0;

                    $sql_3 = "SELECT DISTINCT ID_Partie FROM RoleDansPartie WHERE ID_Role = " . $val_2["ID"];
                    $result_3 = $conn->query($sql_3);

                    while($val_3 = $result_3->fetch_assoc())
                    {
                        $jouees++;

                        $sql_4 = "SELECT * FROM Partie WHERE ID = ". $val_3["ID_Partie"] . " AND ID_Faction_Victoire = " . $faction_ID;
                        $result_4 = $conn->query($sql_4);

                        while($val_4 = $result_4->fetch_assoc())
                            $victoire++;
                    }


                    

                    // NOMBRE DE PARTIES JOUEES
                    echo '<td> ' . $jouees . '</td>';

                    // % DE PARTIES JOUEES
                    echo '<td> ' . $jouees / $nombrePartie * 100 . '</td>';


                    // NOMBRE DE PARTIES GAGNEES
                    echo '<td> ' . $victoire . '</td>';

                    // % DE PARTIES JOUEES
                    echo '<td> ' . $victoire / $nombrePartie * 100 . '</td>';


                    //FIN
                    echo '</tr>';
                }
            }
        ?>

    </table>
    <br><br><br>

</body>

<style>
    td
    {
        color:white;
        text-align:center;
    }
    tr
    {
        color:white;
        text-align:center;
    }
</style>
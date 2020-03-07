<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // length currently occupied by the last row of cards
    $_SESSION['length'] = 0;
 
    // size taken by a card (its initial value is 3)
    if(!isset($_SESSION['size'])) $_SESSION['size'] = 3;
    
    // Max length for a row of cards
    $_SESSION['MAX'] = 12;


    
    include "php/head.php";
    include "php/database.php";
    include "php/cards.php";
?>
<title>Loup-Garou - Rôles</title>



<body class="LG_Black_Background">
    <?php include 'php/navbar.php'; ?>

    
    <br><br><br>


    <!-- Title -->
    <h1 class="container bold"> Rôles </h1>


    <br><br><br>


    <!-- Buttons -->
    <div class="container row center">

        <?php
            addButton("roles.php?sort=1", "flag",       "Faction"); 
            addButton("roles.php?sort=0", "select_all", "Voir tout"); 
            addButton("roles.php?sort=2", "wb_sunny",   "Horaire Effet"); 
        ?>

    </div>


    <br><br><br>



    <!-- Show all Roles -->
    <div class="container">
        <?php
            $X = 0;
            if( isset($_GET['sort']) )
                $X = $_GET['sort'];

            switch( $X )
            {
                case 0:
                    displayRolesAll();
                break;

                case 1:
                    displayRolesFaction();
                break;

                case 2:
                    displayRolesTime();
                break;

                
                default:
                    displayRolesAll();
                break;
            }
        ?>
    </div>

</body>


<?php
    /** Adds a Button */
    function addButton($link, $icon, $text)
    {
        echo '
        <div class="col s4 zoom">
            <a class="waves-effect waves-light btn" style="background-color: rgb(123, 27, 36)" href="' . $link . '">
                <i class="material-icons left">' . $icon . '</i>
                ' . $text . '
            </a>
        </div>';
    }


    /** Displays all the roles */
    function displayRolesAll()
    {
        $conn = connect();
        $sql = "SELECT ID, Name FROM Role";

        $result = $conn->query($sql);
        while($val = $result->fetch_assoc())
            addRoleCard( $val["ID"], $val["Name"] );
    }



    /** Displays the roles by Faction */
    function displayRolesFaction()
    {
        $conn = connect();
        $sql_1 = "SELECT * FROM Faction";
        

        $result_1 = $conn->query($sql_1);
        while($val_1 = $result_1->fetch_assoc())
        {
            echo '<h3 class="center LG_Red">' . $val_1["Name"] . '</h3>';
            

            $sql_2 = "SELECT ID, Name FROM Role WHERE Role.ID_Faction = " . $val_1["ID"] . "";
            $result_2 = $conn->query($sql_2);

            while($val_2 = $result_2->fetch_assoc())  
                addRoleCard( $val_2["ID"], $val_2["Name"] );
            
            
            endRow();
            echo '<br><br><br>';
        }
    }



    /** Displays the roles by Time */
    function displayRolesTime()
    {
        $conn = connect();
        $sql_1 = "SELECT DISTINCT activeAtNight FROM Role";
        

        $result_1 = $conn->query($sql_1);
        while($val_1 = $result_1->fetch_assoc())
        {
            if($val_1["activeAtNight"] == 0) echo '<h3 class="center LG_Red"> Actif le jour </h3>';
            if($val_1["activeAtNight"] == 1) echo '<h3 class="center LG_Red"> Actif la nuit </h3>';
            if($val_1["activeAtNight"] == 2) echo '<h3 class="center LG_Red"> Contextuel </h3>';
            

            $sql_2 = "SELECT ID, Name FROM Role WHERE Role.activeAtNight = " . $val_1["activeAtNight"] . "";
            $result_2 = $conn->query($sql_2);

            while($val_2 = $result_2->fetch_assoc())  
                addRoleCard( $val_2["ID"], $val_2["Name"] );
            
            
            endRow();
            echo '<br><br><br>';
        }
    }
?>


<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
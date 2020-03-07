<?php include 'php/head.php'; ?>



<body class="LG_Black_Background">
    <?php
        include 'php/navbar.php';
        include 'php/database.php';

        $path = "pictures/Roles/DEFAULT.png";
        $role = "Rôle non trouvé";
        $description = ":(";

        $conn = connect();
        $sql = "SELECT ID, Name, Description FROM Role WHERE ID = ". $_GET["ID"] . "";

        $result = $conn->query($sql);
        if($val = $result->fetch_assoc())
        {
            $path = "pictures/Roles/" . $val['ID']. ".png";
            $role = $val['Name'];
            $description = $val['Description'];
        }

        echo '
            <title>Loup-Garou - ' . $role . '</title>
            <br><br><br>
            <h1 class="container" style="font-weight: bold"> ' . $role . ' </h1>
            <br><br><br>

            <div class="container row">
      
            
                <div class="col s5">
                    <div class="card" style="background-color: inherit">
                        <div class="card-image">
                            <img src="' . $path . '">
                        </div>
                    </div>
                </div>
            
                <div class="col s1"></div>

                <div class="col s6">
                    <h5 class="LG_Red center"> ' . $description . ' </h5>
                </div>
            
        
            </div>';
    ?>


</body>
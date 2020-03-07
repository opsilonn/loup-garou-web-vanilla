<?php include 'php/head.php'; ?>
<title>Loup-Garou - Nouveau Rôle</title>



<body class="LG_Black_Background">
    <?php include 'php/navbar.php'; ?>

  
    <br><br><br>
    <h1 class="container bold"> Nouveau Rôle </h1>
    <br><br><br>


    <div class="container row">
        <form class="col s12 from" method="post" action="#">

            <!-- Nom -->
            <div class="row">
                <div class="col s3"></div>

                <div class="input-field col s6 white-text">
                    <i class="material-icons prefix LG_Red">account_circle</i>
                    <input id="username" type="text" required>
                    <label for="username">Nom</label>
                </div>

                <div class="col s3"></div>
            </div>


            <br><br>


            <!-- Faction / Horaire / Unique -->
            <div class="row">

                <?php
                    // Faction
                    createRadioGroup( "Faction", array("Villageois", "Loups-Garous", "Indépendants") );

                    // Horaire
                    createRadioGroup( "Horaire", array("Jour", "Nuit", "Contextuel") );
                ?>
                
                <!-- Est Unique -->
                <div class="center col s4">
                    <label><br><br>
                        <input type="checkbox" class="filled-in" checked="checked" required/>
                        <span>Ce rôle est unique</span>
                    </label>
                </div>
            </div>

            
            <br><br>


            <!-- Description -->
            <div class="row">
                <div class="col s3"></div>

                <div class="input-field col s6 white-text">
                    <i class="material-icons prefix LG_Red">mode_edit</i>
                    <textarea id="Description" class="materialize-textarea" required></textarea>
                    <label for="Description">Description</label>
                </div>
                
                <div class="col s3"></div>
            </div>

            
            <br><br>


            <div class="row">
                <div class="col s3"></div>

                <div class="file-field input-field col s6">
                    <div class="btn">
                        <span>File</span>
                        <input type="file">
                    </div>

                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                
                <div class="col s3"></div>
            </div>

            
            <br><br>

            
            <!-- Submit button -->
            <div class="input-field center">
                <a class="waves-effect waves-light btn-large zoom" type="submit" name="action" id="register">
                    <i class="material-icons left">get_app</i>Valider
                </a>  
            </div>

        </form>
    </div>

</body>

<?php
    function createRadioGroup($group, $array)
    {
        echo '<div class="col s4">';

        foreach ($array as &$a) 
            echo '
            <p>
                <label>
                    <input name="' . $group . '" type="radio" checked/>
                    <span>' . $a . '</span>
                </label>
            </p>';

        echo '</div>';
    }
?>



<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
<script>
    $('#textarea1').val('New Text');
    M.textareaAutoResize($('#textarea1'));
</script> 
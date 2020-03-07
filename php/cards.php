<?php
    /** Displays all informations of a given Role
     * @param $ID Identifier of the Role
     * @param $name name of the Role
     * @param $description team working on the Role
     */
    function addRoleCard($ID, $name)
    {
        // We verify if we need to create a new Row
        if($_SESSION['length'] == 0)
            echo '<div class="row">';
        

        
        // Now we add the column space where we'll create the card
        $_SESSION['length'] += $_SESSION['size'];
        
        echo '<div class="col s'. $_SESSION['size'] .' smallZoom">
                    <a href="rolePresentation.php?ID='. $ID .'">
                        <div class="card" style="background-color: inherit">
                            <div class="card-image">';


        $path = "pictures/Roles/$ID.png";
        if ( file_exists($path) )
            echo '               <img src=" ' . $path . ' ">';
        else
            echo '              <img src="pictures/Roles/DEFAULT.png">';


        echo '
                                <div class="card-content">
                                    <h5 class="center LG_Red">' . $name . '</h5>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>';

        // We verify if we need to end the Row
        if($_SESSION['length'] >= $_SESSION['MAX'])
        {
            $_SESSION['length'] = 0;
            echo '</div>';
        }
    }


    function endRow()
    {
        // We verify if we need to end the Row
        if($_SESSION['length'] != $_SESSION['MAX'])
        {
            $_SESSION['length'] = 0;
            echo '</div>';
        }
    }
?>





<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
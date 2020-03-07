<?php
  include 'php/database.php';
  include 'php/head.php';
?>
<title>Loup-Garou</title>



<body class="LG_Black_Background">
  <?php include 'php/navbar.php'; ?>


  <!-- Show all Roles -->
  <div class="container smallZoom">
      <div class="carousel">
        <?php
            $conn = connect();
            $sql = "SELECT ID FROM Role ORDER BY RAND()";
    
            $result = $conn->query($sql);
            while($val = $result->fetch_assoc())
                echo '<a class="carousel-item" href="#one!"><img src="pictures/Roles/' . $val["ID"] . '.png"></a>';
        ?>
      </div>
  </div>


  <!--   Photo + Description   -->
  <h5 class="container center LG_Red">
      Le jeu prend lieu dans un village infesté de Loups-Garous.
      <br><br>
      Lorsque ceux-ci se décident à exterminer la population,
      à raison d’un membre par soir, le village décide d’éradiquer la menace
      en votant chaque matin la mise à mort de l’un de ses membres.
      <br><br>
      Cette communauté contient un certain nombre d’individus aux pouvoirs atypiques, disposant parfois d’un but qui leur est propre…
  </h5>


</body>


<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    $(document).ready( function() { $('.carousel').carousel(); } );

    $('.carousel').carousel();
    autoplay();
    function autoplay()
    {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 2000);
    }
</script>
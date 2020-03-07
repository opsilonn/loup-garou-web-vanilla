<!-- NavBar  -->
<nav class="LG_Red_Background" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="homepage.php" class="zoom brand-logo">Loup-Garou</a>
    <ul class="right hide-on-med-and-down">
      <?php
        addLink("roles.php",   "search",     "Voir les Rôles");
        addLink("newRole.php", "person_add", "Ajouter Rôle");
        addLink("newGame.php", "fiber_new",  "Nouvelle Partie");
        addLink("analyse.php", "archive",    "Analyse des Résultats");
      ?>
    </ul>

    <ul id="nav-mobile" class="sidenav">
      <li><a href="#">Navbar Link</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>






<?php
  function addLink($link, $icon, $text)
  {
      echo '
      <li>
          <a class="smallZoom" href="' . $link . '">
              <i class="material-icons left">' . $icon . '</i>' . $text . '
          </a>
      </li>';
  }
?>
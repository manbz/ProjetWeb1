<?php
session_start();
?>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
            <form>
                <?php
                if (isset($_SESSION['identifiant'])) 
                {
                    ?>
                <a class="btn" href="PageMembre.php" role="button">Mon profil</a>
                <a class="btn btn-success" href="Traitement-Deconnexion.php" role="button">Déconnexion</a>
                
                <?php
                }
                else
                {
                   ?>  
            <a class="btn btn-success" href="Connexion.php" role="button">Connexion</a>
            <a class="btn" href="Inscription.php" role="button">Inscription</a>
            <?php
                }
            ?>
            </form>
            <form class="navbar-form navbar-left">
                <a class="btn" href="Accueil.php" role="button"><img id="iconehome" src="icone-maison.png" alt ="home"/></a>
           </form>
         
        </div>
      </div>
    </nav>
  </body>
</html>

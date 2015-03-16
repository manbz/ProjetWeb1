<?php
session_start();
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="logoH.png">

    <title>Créer un groupe</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Style-formulaire.css" rel="stylesheet">
    <link href="Style-general.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  
   </head>
      <?php
      require 'connect.php';
      include 'header.php';
      ?>
    
    <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li><a href="PageMembre.php" role="button">Mes évènements</a></li>
            <li class="active"><a href="CreerGroupe.php" role="button">Créer un groupe <span class="sr-only">(current)</span></a></li>
            <li><a href="CreerEvent.php" role="button">Créer un évènement</a></li>
            <li><a href="modifierMonProfil.php" role="button">Modifier mon profil</a></li>
            <li><a href="modifierMotDePasse.php" role="button">Modifier mon mot de passe</a></li>
          </ul>
        </div>
      
    </div>
         
         <h1 class="form-signin-heading" id="titre3">Créez un groupe</h1>
        


         <form class="form-signin" method="POST" action="Traitement-creation-groupe.php">
        <h5 class="form-signin-heading" id="titre4">Choisissez le nom du groupe</h5>
        <input type="text" name="nomGroupe" class="form-control" placeholder="Nom du groupe" required>
            
        <h5 class="form-signin-heading" id="titre4">Choisissez les membres du groupe:</h5>
        <h5 class="form-signin-heading" id="consigne">Pour selectionner plusieurs membres maintenez la touche "CTRL" enfoncée</h5>
        <select size="4" multiple="multiple" class="form-control" name="ListeMembre[]" id="membre">Membres
           <?php
        $rqmembres="SELECT identifiant FROM UTILISATEUR";
        $membre=mysql_query($rqmembres);
        $nbmembre=mysql_num_rows($membre);
        $i=0;
        while ($i<$nbmembre) 
        {
            $chaquemembre=mysql_result($membre, $i, 'identifiant');
            $i++;
            echo '<option name="1" value="';
            echo $chaquemembre;
            echo'">';
            echo $chaquemembre;
            echo'</option>';
        }
        ?>
        </select>
        
        <button class="btn btn-success" type="submit">Créer</button>
      </form>
    </div> 
        </div>
         </div>

         
  </body>
</html>





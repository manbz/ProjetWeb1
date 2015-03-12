<?php
session_start();
include 'Header.php';
?>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Style-general.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="Style-formulaire.css" rel="stylesheet">
  </head>
    
  <body>

      <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="PageMembre.php" role="button">Mes évènements</a></li>
            <li><a href="CreerGroupe.php" role="button">Créer un groupe</a></li>
            <li class="active"><a href="CreerEvent.php" role="button">Créer un évènement<span class="sr-only">(current)</span></a></li>
            <li><a href="modifierMonProfil.php"> Modifier mon profil </a></li>
            <li><a href="modifierMotDePasse.php" role="button">Modifier mon mot de passe</a></li>
          </ul>
        </div>
      </div>
        </div>

      
        <h1 class="form-signin-heading" id="titre3">Créez votre évenement </h1>
        
        <div class="container">
            <form class="form-signin" method="POST" action="Traitement-creation-event.php">
        <input type="text" name="nomEvent" class="form-control" placeholder="Nom de l'évènement" required>
        <input type="text" name="prixEvent" class="form-control" placeholder="Prix de l'évènement" required >
        <textarea cols="20" rows="4" name="descriptionEvent" id="adresse" class="form-control" placeholder="Description de l'évènement" required></textarea>
        <select size="4" class="form-control" name="categorie">Catégorie
           <?php
                   if ($_SESSION['']) {
                       
                   }
            ?>
        </select>
        <button class="btn btn-success" type="submit">Créer l'évènement</button>
      </form>
    </div> 

<?php
//il faut faire un if pour savoir si l'utilisateur appartient a un groupe ou pas 
//en fonction de ca on connaitra le statut (public ou privé) de l'évènement
?>


      
  </body>


</html>
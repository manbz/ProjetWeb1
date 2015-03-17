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
            <li><a href="CreerEvent.php" role="button">Créer un évènement</a></li>
            <li><a href="modifierMonProfil.php" role="button"> Modifier mon profil</a></li>
            <li class="active"><a href="modifierMotDePasse.php"> Modifier mon mot de passe <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
      </div>
        </div>

      
        <h1 class="form-signin-heading" id="titre3">Modifiez votre mot de passe</h1>
        
        <div class="container">
        <form class="form-signin" method="POST" action="Traitement-mdp.php">
        <h5 class="form-signin-heading" id="titre4">Modifiez mon mot de passe</h5>
        <input type="password" name="mdp1" class="form-control" placeholder="Mot de passe" required>
        <input type="password" name="mdp2" class="form-control" placeholder="Confirmer le mot de passe" required>
        <button class="btn btn-success" type="submit">Modifier</button>
      </form>
    </div> 
      
      
  </body>


</html>
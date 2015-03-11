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
  </head>
    
  <body>

      <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Mes évènements <span class="sr-only">(current)</span></a></li>
            <li><a href="PageGroupe.php" role="button">Créer un groupe</a></li>
            <li><a href="PageEvenement.php" role="button">Créer un évènement</a></li>
            <li><a href="modifierMonProfil.php" role="button">Modifier mon profil</a></li>
          </ul>
        </div>
      </div>
        </div>

  </body>


</html>


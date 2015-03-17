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
            <li><a href="" role="button">Mes évènements</a></li>
            <li><a href="PageGroupe.php" role="button">Créer un groupe</a></li>
            <li><a href="" role="button">Créer un évènement</a></li>
            <li><a href="modifierMonProfil.php"> Modifier mon profil <span class="sr-only">(current)</span></a></li>
			<li class="active"><a href="desinscription.php" role="button">Me désinscrire</a></li>

          </ul>
        </div>
      </div>
        </div>
		      <form method="POST" action="Traitement-Desinscription.php">

<strong>Souhaitez-vous réellement vous désinscrire définitivement de HappyTime?</strong> <br/><br/>Vous n'aurez plus accès aux évènements auxquels vous êtes inscrits et ne pourraient plus visualiser les évènements privés
        <br/><br/><br/><button class="btn btn-success" type="submit">Se désinscrire</button>


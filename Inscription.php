<?php
session_start();
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title>Inscription</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Style-formulaire.css" rel="stylesheet">
    <link href="Style-general.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    
  </head>
     <body>
        
      <?php
      require 'connect.php';
      include 'header.php';
      ?>
         
    <div class="container">
        <form class="form-signin" method="POST" action="Traitement-inscription.php">
        <h1 class="form-signin-heading" id="titre3">Inscrivez vous!</h1>
        
        <h5 class="form-signin-heading" id="titre4">Choisissez vos identifiants</h5>
        <input type="text" name="identifiant" class="form-control" placeholder="Identifiant" required autofocus>
        <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>
        
        <h5 class="form-signin-heading" id="titre4">Formulaire d'inscription</h5>
        <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
        <input type="text" name="nom" class="form-control" placeholder="Nom" required>
        <input type="email" name="email" class="form-control" placeholder="Adresse Email" required autofocus>
        <textarea cols="20" rows="4" name="adresse" id="adresse" class="form-control" placeholder="Adresse postale" required autofocus></textarea>
        <input type="number" name="CP" class="form-control" placeholder="Code Postal" required autofocus>
        <input type="text" name="ville" class="form-control" placeholder="Ville" required autofocus>
        <div class="checkbox">
          <label>
            <input name="newsletter" type="checkbox" value="newsletter">Je m'abonne à la newsletter
          </label>
        </div>
        <button class="btn btn-success" type="submit">S'inscrire</button>
      </form>
    </div> 

  </body>
</html>



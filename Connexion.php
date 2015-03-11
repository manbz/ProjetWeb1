<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title>Connexion</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Style-formulaire.css" rel="stylesheet">
    <link href="Style-general.css" rel="stylesheet">
  </head>
  
  <body>

      <?php
      include 'Header.php';
      ?>
      
    <div class="container">

      <form class="form-signin" method="POST" action="Traitement-connexion.php">
        <h2 class="form-signin-heading" id="titre3">Connectez vous!</h2>
        <input type="text" name="identifiant" class="form-control" placeholder="Identifiant" required autofocus>
        <?php     
        if ($pseudoFaux==1) 
              {
                  echo 'Votre pseudo est erroné';
              }
        ?>
        <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>
        <button class="btn btn-success" type="submit">Se connecter</button>
      </form>
        
        
        
    </div> 
  </body>
</html>

<?php
session_start();
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
    
  <?php
  include 'Header.php';
  ?>
  
      <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li><a href="PageMembre.php" role="button">Mes évènements</a></li>
            <li><a href="CreerGroupe.php" role="button">Créer un groupe</a></li>
            <li><a href="CreerEvent.php" role="button">Créer un évènement</a></li>
            <li class="active"><a href="modifierMonProfil.php"> Modifier mon profil <span class="sr-only">(current)</span></a></li>
            <li><a href="modifierMotDePasse.php" role="button">Modifier mon mot de passe</a></li>
            <li><a href="desinscription.php" role="button">Me désinscrire</a></li>
          </ul>
        </div>
      </div>
        </div>

      
        <h1 class="form-signin-heading" id="titre3">Modifiez votre profil
       <?php
            echo $_SESSION['prenom'];
        ?>
        </h1>
        
        <div class="container">
        <form class="form-signin" method="POST" action="Traitement-modification.php">
        <h5 class="form-signin-heading" id="titre4">Modifiez vos informations personelles</h5>
        <input type="text" name="prenom" class="form-control" value="<?php echo $_SESSION['prenom']; ?>" required>
        <input type="text" name="nom" class="form-control" value="<?php echo $_SESSION['nom']; ?>" required>
        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" required >
        <textarea cols="20" rows="4" name="adresse" id="adresse" class="form-control"  required><?php echo $_SESSION['adresse']?></textarea>
        <input type="number" name="CP" class="form-control" value="<?php echo $_SESSION['CP']; ?>" required>
        <input type="text" name="ville" class="form-control" value="<?php echo $_SESSION['ville']; ?>" required>
        <div class="checkbox">
          <label>
            <input name="newsletter" type="checkbox" value="newsletter">Je m'abonne à la newsletter
          </label>
        </div>
        <button class="btn btn-success" type="submit">Modifier mon profil</button>
      </form>
    </div> 
      
      
  </body>


</html>
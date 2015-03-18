<?php
session_start();
require 'connect.php';
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
    
<?php
  include 'Header.php';
  
  if (isset($_SESSION['identifiant']) && $_SESSION['identifiant']=='gestionnaire') 
{
      
      //Dans cette page il faut afficher les évènements qui n'ont pas été validés par le gest
?>
  
    <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li class="active"><a href="PageGestionnaire.php">Validiation des évènements <span class="sr-only">(current)</span></a></li>
            <li><a href="GererEvent.php" role="button">Gerer les évènements</a></li>
            <li><a href="GererGroupe.php" role="button">Gerer les groupes</a></li>
            <li><a href="GererMembres.php" role="button">Gerer les membres</a></li>
          </ul>
        </div>
      </div>
    </div>

  
  
      
 <h2 id="lignesTitre" class="sub-header">Tous les évènements</h2>
  
      <div id="lignes" class="table-responsive">
          <table id="largeurLigne" class="table table-striped">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Nom</th>
                  <th>Catégorie</th>
                  <th>Lieu</th>
                  <th>Heure</th>
                  <th>Prix</th>
               </tr>
              </thead>
              <tbody> 
            
                <tr>
                  <td name="dateevent"><?php echo $Date; ?></td>
                  <td name="nomevent"><?php echo $chaqueevent['NomEvenement']; ?></td>
                  <td name="categorieevent"><?php echo $categorie; ?></td>
                  <td name="lieuevent"><?php echo $Lieu; ?></td>
                  <td name="heureevent"><?php echo $Heure; ?></td>
                  <td name="prixevent"><?php echo $chaqueevent['Prix']; ?></td>
                  
              <!-- il faut que je recupere les données de la page et que je les envois a supprimerevent-->
                
                
                  <td><form method="POST" action="SupprimerEvent.php">
                    <input type="hidden" name="NomEvent" value="<?php echo $chaqueevent['NomEvenement']; ?>">
                    <input class="btn" value="Supprimer l'évènement" href="SupprimerEvent.php" type="submit" role="button"></form></td>
              
                </tr>
                
              </tbody>
            </table>
          </div>
                
<?php
              
}
else
{
    header('Location: Accueil.php');
}
?>
      
      
  </body>


</html>

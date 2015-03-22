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
  
      
 <h2 id="lignesTitre" class="sub-header">Validation des évenements crées</h2>
  
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
            
               <?php
               
              $rqValidationEvent="SELECT * FROM evenement WHERE validation='En attente'";
              $validationEvent=mysql_query($rqValidationEvent);
  
              $i=0;
              while($EventNonValide=mysql_fetch_array($validationEvent))
              {
                  $rqDateHoraire="SELECT Date, Horaire 
                               FROM sederoule, evenement
                               WHERE NoEvenement='".$EventNonValide['NoEvenement']."'";

               $DateHoraire=  mysql_query($rqDateHoraire);
               $Date=mysql_result($DateHoraire, 0, 'Date');
               $Horaire=mysql_result($DateHoraire, 0, 'Horaire');
               
               $rqLieu="SELECT NomLieu
                                 FROM evenement, lieu
                                 WHERE NoEvenement='".$EventNonValide['NoEvenement']."'
                                 AND lieu.NoLieu=evenement.Lieu";
               $Lieu=  mysql_query($rqLieu);
               $LieuEvent=mysql_result($Lieu, 0, 'NomLieu');
               
               $rqCategorie="SELECT NomCategorie 
                                 FROM evenement, categorie 
                                 WHERE NoEvenement='".$EventNonValide['NoEvenement']."'
                                 AND categorie.IdCategorie=evenement.Categorie";

               $Categorie=  mysql_query($rqCategorie);
               $categorieEvent=mysql_result($Categorie, 0, 'NomCategorie');
               $i++;
              ?>
                <tr>
                  <td name="dateevent"><?php echo $Date; ?></td>
                  <td name="nomevent"><?php echo $EventNonValide['NomEvenement']; ?></td>
                  <td name="categorieevent"><?php echo $categorieEvent; ?></td>
                  <td name="lieuevent"><?php echo $LieuEvent ?></td>
                  <td name="heureevent"><?php echo $Horaire; ?></td>
                  <td name="prixevent"><?php echo $EventNonValide['Prix']; ?></td>
                
                
                  <td><form method="POST" action="ValiderEvent.php">
                    <input type="hidden" name="NoEvent" value="<?php echo $EventNonValide['NoEvenement']; ?>">
                    <input class="btn" value="Valider l'evenement" href="ValiderEvent.php" type="submit" role="button"></form></td>
                </tr>
                
         <?php } ?>
                
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

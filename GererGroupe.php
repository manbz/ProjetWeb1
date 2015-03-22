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
?>
  
    <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
             <li><a href="PageGestionnaire.php">Validiation des évènements</a></li>
             <li><a href="GererEvent.php" role="button">Gerer les évènements</a></li>
            <li class="active"><a href="GererGroupe.php" role="button">Gerer les groupes<span class="sr-only">(current)</span></a></li>
            <li><a href="GererMembres.php" role="button">Gerer les membres</a></li>
          </ul>
        </div>
      </div>
    </div>

      
  <h2 id="lignesTitre" class="sub-header">Tous les groupes</h2>
  
      <div id="lignes" class="table-responsive">
          <table id="largeurLigne" class="table table-striped">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Nom</th>
                  <th>Nombre de participants</th>
                  <th>Créateur</th>
               </tr>
              </thead>
              <tbody>

                  
              <?php
              $rqAllGroupe="SELECT * FROM groupe";
              $AllGroupe=mysql_query($rqAllGroupe);
              $i=0;
              while($chaquegroupe=mysql_fetch_array($AllGroupe))
              {
               
               $i++;
              ?>
                <tr>
                  <td name="nogroupe"><?php echo $chaquegroupe['NoGroupe']; ?></td>
                  <td name="nomgroupe"><?php echo $chaquegroupe['NomGroupe']; ?></td>
                  <td name="nbparticipants"><?php echo $chaquegroupe['NbParticipants']; ?></td>
                  <td name="créateur"><?php echo $chaquegroupe['Responsable']; ?></td>
                
                
                  <td><form method="POST" action="SupprimerGroupe.php">
                    <input type="hidden" name="NoGroupe" value="<?php echo $chaquegroupe['NoGroupe']; ?>">
                    <input class="btn" value="Supprimer le groupe" href="SupprimerGroupe.php" type="submit" role="button"></form></td>
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







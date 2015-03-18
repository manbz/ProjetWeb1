<?php
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
            <li><a href="GererGroupe.php" role="button">Gerer les groupes</a></li>
            <li class="active"><a href="GererMembres.php" role="button">Gerer les membres<span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
      </div>
    </div>

      
  <h2 id="lignesTitre" class="sub-header">Tous les membres</h2>
  
      <div id="lignes" class="table-responsive">
          <table id="largeurLigne" class="table table-striped">
              <thead>
                <tr>
                  <th>Identfiant</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Email</th>
               </tr>
              </thead>
              <tbody>

                  
              <?php
              $rqAllUsers="SELECT * FROM utilisateur
                           WHERE identifiant != 'gestionnaire'";
              $AllUsers=mysql_query($rqAllUsers);
              $i=0;
              while($chaqueuser=mysql_fetch_array($AllUsers))
              {
               
               $i++;
              ?>
                <tr>
                  <td name="nogroupe"><?php echo $chaqueuser['identifiant']; ?></td>
                  <td name="nomgroupe"><?php echo $chaqueuser['Nom']; ?></td>
                  <td name="nbparticipants"><?php echo $chaqueuser['Prenom']; ?></td>
                  <td name="créateur"><?php echo $chaqueuser['Email']; ?></td>
                
                
                  <td><form method="POST" action="SupprimerMembre.php">
                    <input type="hidden" name="identifiant" value="<?php echo $chaqueuser['identifiant']; ?>">
                    <input class="btn" value="Supprimer le membre" href="SupprimerMembre.php" type="submit" role="button"></form></td>
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







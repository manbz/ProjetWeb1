<?php session_start(); ?>
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
?>

    <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="PageMembre.php" role="button">Mes évènements</a></li>
            <li class="active"><a href="MesGroupes.php">Mes groupes <span class="sr-only">(current)</span></a></li>
            <li><a href="CreerGroupe.php" role="button">Créer un groupe</a></li>
            <li><a href="CreerEvent.php" role="button">Créer un évènement</a></li>
            <li><a href="modifierMonProfil.php" role="button">Modifier mon profil</a></li>
            <li><a href="modifierMotDePasse.php" role="button">Modifier mon mot de passe</a></li>
            <li><a href="desinscription.php" role="button">Me désinscrire</a></li>

          </ul>
        </div>
      </div>
    </div>
		
    <h2 id="lignesTitre" class="sub-header">J'appartiens aux groupes suivants</h2>
      <div id="lignes" class="table-responsive">
          <table id="largeurLigne" class="table table-striped">

              <thead>
                <tr>
                  <th>Numéro de groupe</th>
                  <th>Nom de groupe</th>
                  <th>Nombre de participants</th>
                  <th>Responsable du groupe</th>
               </tr>
              </thead>
            <tbody>
		<?php
                require 'connect.php';
	
	
		$Req1="SELECT identifiant
                       FROM UTILISATEUR 
                       WHERE identifiant='".$_SESSION['identifiant']."'";
		$Res1=mysql_query($Req1);
		$Membre=mysql_fetch_array($Res1);
                
		$Req="SELECT * FROM APPARTENIRENPRIVE, GROUPE 
                      WHERE GROUPE.NoGroupe=APPARTENIRENPRIVE.Groupe 
                      AND Membre='".$Membre['identifiant']."'";
		$Res=mysql_query($Req);
                
	while ($groupe=mysql_fetch_array($Res))
            {
            ?><tr>
                  <td> <?php echo $groupe['NoGroupe'];?></td>
                  <td> <?php echo $groupe['NomGroupe'];?></td>
                  <td><?php echo $groupe['NbParticipants'];?></td>
                  <td><?php echo $groupe['Responsable'];?></td>
                  <td><form method="POST" action="QuitterGroupe.php">
                    <input type="hidden" name="NoGroupe" value="<?php echo $groupe['NoGroupe']; ?>">
                    <input class="btn" value="Quitter le groupe" href="QuitterGroupe.php" type="submit" role="button"></form></td>
             </tr>
    <br/><?php
		}
	mysql_close();
?>
            </tbody>
            </table>
          </div>
	
<?php include 'Footer.html';?>
</body>
</html>
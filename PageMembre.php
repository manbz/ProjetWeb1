<?php
require 'connect.php';
?>
<html>
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
  
  if (isset($_SESSION['identifiant']) && $_SESSION['identifiant']!='gestionnaire') 
    {
	
    ?>
  
    <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Mes évènements <span class="sr-only">(current)</span></a></li>
            <li><a href="MesGroupes.php" role="button">Mes groupes</a></li>
            <li><a href="CreerGroupe.php" role="button">Créer un groupe</a></li>
            <li><a href="CreerEvent.php" role="button">Créer un évènement</a></li>
            <li><a href="modifierMonProfil.php" role="button">Modifier mon profil</a></li>
            <li><a href="modifierMotDePasse.php" role="button">Modifier mon mot de passe</a></li>
            <li><a href="desinscription.php" role="button">Me désinscrire</a></li>
          </ul>
        </div>
      </div>
    </div>

      <h2 id="lignesTitre" class="sub-header">Je participe aux évènements</h2>
      <div id="lignes" class="table-responsive">
          <table id="largeurLigne" class="table table-striped">

              <thead>
                <tr>
                  <th>Date</th>
                  <th>Nom</th>
                  <th>Lieu</th>
                  <th>Prix</th>
               </tr>
              </thead>
				<tbody>
			  <?php
	require 'connect.php';
		
		$Req1="SELECT identifiant FROM UTILISATEUR 
                       WHERE identifiant='".$_SESSION['identifiant']."'";
		$Res1=mysql_query($Req1);
		$Membre=mysql_fetch_array($Res1);
                
		$Req="SELECT * FROM APPARTENIRENPRIVE, GROUPE, EVENEMENT, LIEU, SEDEROULE 
                       WHERE Validation='oui'
                       AND SEDEROULE.NumEvenement=EVENEMENT.NoEvenement 
                       AND GROUPE.NoGroupe=APPARTENIRENPRIVE.Groupe 
                       AND EVENEMENT.Groupe=APPARTENIRENPRIVE.Groupe 
                       AND LIEU.NoLieu=EVENEMENT.Lieu
                       AND Membre='".$Membre['identifiant']."'";
		$Res=mysql_query($Req);
                
		$Req2="SELECT * FROM APPARTENIRPUBLIQUEMENT, EVENEMENT, LIEU, SEDEROULE 
                        WHERE SEDEROULE.NumEvenement=EVENEMENT.NoEvenement 
                        AND EVENEMENT.NoEvenement=APPARTENIRPUBLIQUEMENT.Evenement 
                        AND LIEU.NoLieu=EVENEMENT.Lieu 
                        AND utilisateur='".$Membre['identifiant']."'";
		$Res2=mysql_query($Req2);
                
		while ($EVENEMENT=mysql_fetch_array($Res))
		{?>
                <tr>
                  <td> <?php echo $EVENEMENT['Date'];?></td>
                  <td> <?php echo $EVENEMENT['NomEvenement'];?></td>
                  <td><?php echo $EVENEMENT['NomLieu'];
                            echo $EVENEMENT['AdresseLieu'];?>
                            <br/>
                      <?php 
			echo $EVENEMENT['CodePostalLieu']." ";
			echo $EVENEMENT['VilleLieu'];?></td>
                  <td><?php echo $EVENEMENT['Prix'];?></td>
                </tr>
                <?php
		}
                
		while ($EVENEMENTPUBLIC=mysql_fetch_array($Res2))
		{?>
			<tr>
                  <td><?php echo $EVENEMENTPUBLIC['Date'];?></td>
                  <td><?php echo $EVENEMENTPUBLIC['NomEvenement'];?></td>
                  <td><?php echo $EVENEMENTPUBLIC['NomLieu'];
                            echo $EVENEMENTPUBLIC['AdresseLieu'];?>
                            <br/>
                      <?php echo $EVENEMENTPUBLIC['CodePostalLieu'];
                            echo $EVENEMENTPUBLIC['VilleLieu'];?></td>
                  <td><?php echo $EVENEMENTPUBLIC['Prix'];?></td>

                </tr>
			<?php
		}  
                        ?>
              </tbody>
            </table>
          </div>

  <?php
  }
include 'Footer.html';
?>   
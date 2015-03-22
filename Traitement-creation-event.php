<?php
session_start();
require 'connect.php';

$nomEvent=$_POST['nomEvent'];
$prixEvent=$_POST['prixEvent'];
$descriptionEvent=$_POST['descriptionEvent'];
$dateEvent=$_POST['date'];
$heureEvent=$_POST['heure'];
$categorie=$_POST['categorie'];
$nomLieu=$_POST['NomLieu'];
$adresseLieu=$_POST['AdresseLieu'];
$CPlieu=$_POST['CP'];
$villeLieu=$_POST['Ville'];
$groupe=$_POST['groupe'];
$nbParticipant=$_POST['NbParticipant'];

		$Req1="SELECT identifiant
                       FROM UTILISATEUR 
                       WHERE identifiant='".$_SESSION['identifiant']."'";
		$Res1=mysql_query($Req1);
		$Membre=mysql_fetch_array($Res1);
                
                $rqNoLieu="SELECT MAX(NoLieu) FROM lieu";
                $resNoLieu=  mysql_query($rqNoLieu);
                $noLieu=  mysql_result($resNoLieu, 0, 'NoLieu');
                $newNoLieu=$noLieu;
                $newNoLieu++;
                echo $newNoLieu; //ca marche pas
                
                $rqLieu="INSERT INTO LIEU (NomLieu, AdresseLieu, CodePostalLieu, VilleLieu, NoLieu)
                           VALUES ('$nomLieu', '$adresseLieu', '$CPlieu', '$villeLieu', '$newNoLieu')";
                $resLieu=  mysql_query($rqLieu);
		
if ($groupe=="public")    
{                 
		$Req="INSERT INTO EVENEMENT (NomEvenement, Statut, Prix, Description, Createur, NbParticipantMax,Lieu) 
			VALUES ('$nomEvent', 'Public', '$prixEvent', '$descriptionEvent', '".$Membre['identifiant']."', '$nbParticipant', '$Nolieu')";
		$Res=mysql_query($Req);
}
else
{               
	$Req2="INSERT INTO EVENEMENT (NomEvenement, Statut, Prix, Description, Createur, Groupe, NbParticipantMax, Lieu) 
			VALUES ('$nomEvent', 'Prive', $prixEvent, '$descriptionEvent', '".$Membre['identifiant']."', '$groupe', '$nbParticipant', '$Nolieu')";
			$Res2=mysql_query($Req2);
                        
        
}


















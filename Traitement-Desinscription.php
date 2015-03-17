<?php
	$Req="DELETE FROM UTILISATEUR WHERE prenom=$_SESSION['prenom'] AND nom=$_SESSION['nom']";
	$Res=mysql_query($Req);
	header ('Location: Accueil.php');

?>
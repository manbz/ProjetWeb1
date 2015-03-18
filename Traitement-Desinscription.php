<?php
session_start();
require 'connect.php';
	$Req="DELETE FROM UTILISATEUR WHERE identifiant='".$_SESSION['identifiant']."'";
	$Res=mysql_query($Req);
	header ('Location: Accueil.php');

?>
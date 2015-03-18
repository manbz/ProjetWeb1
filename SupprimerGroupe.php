<?php
session_start();
require 'connect.php';


$NoGroupe=$_POST['NoGroupe'];

$rqsupprimerGroupe="DELETE FROM groupe
                   WHERE NoGroupe='".$NoGroupe."'";
mysql_query($rqsupprimerGroupe);


$rqsupprimerGroupe2="DELETE FROM appartenirenprive
                   WHERE Groupe='".$NoGroupe."')";
mysql_query($rqsupprimerGroupe2);

header('Location: GererGroupe.php');
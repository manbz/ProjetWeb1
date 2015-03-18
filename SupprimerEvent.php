<?php
session_start();
require 'connect.php';


$NomEvent=$_POST['NomEvent'];

$rqnoevent="SELECT NoEvenement FROM evenement WHERE NomEvenement='".$NomEvent."'";
$resnoevent=  mysql_query($rqnoevent);
$noevent=mysql_result($resnoevent, 0, 'NoEvenement');


$rqsupprimerEvent="DELETE FROM evenement
                   WHERE NoEvenement='".$noevent."'";
mysql_query($rqsupprimerEvent);

$rqsupprimerEvent2="DELETE FROM appartenirpubliquement
                   WHERE Evenement='".$noevent."')";
mysql_query($rqsupprimerEvent2);


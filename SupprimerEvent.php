<?php
session_start();
require 'connect.php';


$NomEvent=$_POST['NomEvent'];


$rqsupprimerEvent="DELETE FROM evenement
                   WHERE NomEvenement='".$NomEvent."'";
mysql_query($rqsupprimerEvent);

$rqsupprimerEvent2="DELETE FROM appartenirpubliquement
                   WHERE Evenement='".$noevent."')";
mysql_query($rqsupprimerEvent2);


<?php
session_start();
require 'connect.php';


$User=$_POST['identifiant'];

$rqsupprimerUser="DELETE FROM utilisateur
                   WHERE identifiant='".$User."'";
mysql_query($rqsupprimerUser);


$rqsupprimerGroupe2="DELETE FROM appartenirenprive
                   WHERE Membre='".$User."')";
mysql_query($rqsupprimerGroupe2);

$rqsupprimerGroupe3="DELETE FROM appartenirpubliquement
                   WHERE Utilisateur='".$User."')";

header('Location: GererMembres.php');
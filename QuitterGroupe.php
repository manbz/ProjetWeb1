<?php
session_start();
require 'connect.php';

$groupe=$_POST['NoGroupe'];

$rqQuitterGroupe="DELETE FROM APPARTENIRENPRIVE
                  WHERE Groupe='".$groupe."'
                  AND Membre='".$_SESSION['identifiant']."'";

$quitterGroupe=  mysql_query($rqQuitterGroupe);

header('Location: MesGroupes.php');


<?php
session_start();
require 'connect.php';


$nomGroupe=$_POST['nomGroupe'];

$rqverifgroupe="SELECT NomGroupe FROM groupe WHERE NomGroupe='".$nomGroupe."'";
$verifroupe=  mysql_query($rqverifgroupe);
$nbNomGroupe=  mysql_num_rows($verifroupe);

if ($nbNomGroupe==0) 
{
    
$rqGroupe="INSERT INTO groupe (Responsable, NomGroupe) VALUES('".$_SESSION['identifiant']."','".$nomGroupe."')";
$creationgroupe=mysql_query($rqGroupe);



$recupnogroupe="SELECT NoGroupe FROM groupe WHERE NomGroupe='".$nomGroupe."'";

$resultatgroupe=mysql_query($recupnogroupe);
$nogroupe=mysql_result($resultatgroupe, 0, 'NoGroupe');



$i=0;
while (list($id_membre,$membre)=each($_POST['ListeMembre']))
{$rqmembregroupe="INSERT INTO appartenirenprive VALUES ('".$membre."','".$nogroupe."')";
mysql_query($rqmembregroupe);

$i++;
}

$rqnbparticipants="UPDATE groupe SET NbParticipants='".$i."' WHERE NomGroupe='".$nomGroupe."'";
mysql_query($rqnbparticipants);


header('Location: PageMembre.php');
}

else
{header('Location: CreerGroupe.php'); }




//i represente le nombre de participants dans le groupe



//ATTENTION: CA MARCHE PAS AVEC DES NOMS AVEC APOSTOPHES EX: amis d'enfance


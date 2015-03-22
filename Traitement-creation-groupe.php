<?php
session_start();
require 'connect.php';


$nomGroupe=$_POST['nomGroupe'];

if ($nbNomGroupe==0) 
{
//Insertion dans la table groupe   
$rqGroupe="INSERT INTO groupe (Responsable, NomGroupe) VALUES('".$_SESSION['identifiant']."','".$nomGroupe."')";
$creationgroupe=mysql_query($rqGroupe);

//On recupere le numéro du groupe dans la base
$recupnogroupe="SELECT NoGroupe FROM groupe WHERE NomGroupe='".$nomGroupe."'";
$resultatgroupe=mysql_query($recupnogroupe);
$nogroupe=mysql_result($resultatgroupe, 0, 'NoGroupe');

//Le créateur du groupe est automatiquement dans le groupe
$rqCreateurGroupe="INSERT INTO appartenirenprive VALUES ('".$_SESSION['identifiant']."','".$nogroupe."')";
mysql_query($rqCreateurGroupe);

$i=0;
//insertion des membres du groupe dans la table appartenirenprive
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


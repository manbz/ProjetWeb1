<?php
session_start();
require 'connect.php';

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$CP=$_POST['codePostal'];
$ville=$_POST['ville'];

if (isset($_POST['newsletter']))
{
    $news="O";
}
else
{
   $news="N";   
}


$rqmodif="UPDATE UTILISATEUR
        SET prenom='".$prenom."', nom='".$nom."',email='".$email."', adresse='".$adresse."', codePostal='".$CP."', ville='".$ville."',newletter='".$news."'
        WHERE identifiant='".$_SESSION['identifiant']."'";
mysql_query($rqmodif);
header ('Location: PageMembre.php');

?>
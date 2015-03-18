<?php
session_start();
require 'connect.php';

$_SESSION['prenom']=$_POST['prenom'];
$_SESSION['nom']=$_POST['nom'];
$_SESSION['email']=$_POST['email'];
$_SESSION['adresse']=$_POST['adresse'];
$_SESSION['CodePostal']=$_POST['CP'];
$_SESSION['ville']=$_POST['ville'];

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
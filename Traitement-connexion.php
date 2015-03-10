<?php
session_start();

require 'connect.php';

$idsaisi=$_POST['identifiant'];
$rq2="SELECT mdp FROM UTILISATEUR WHERE identifiant='".$idsaisi."'";
$res2=mysql_query($rq2);
$nbresultat=mysql_num_rows($res2);

if ($nbresultat!=0)
{
    //le pseudo est dans la base de données
    $mdpsaisi=$_POST['mdp'];
    $rq="SELECT mdp FROM UTILISATEUR WHERE identifiant='".$idsaisi."' AND mdp='".$mdpsaisi."'";
    $res=mysql_query($rq);
    $nbresultatmdp=mysql_num_rows($res);
    
    if ($nbresultatmdp!=0) 
    {
        
        $rq3="SELECT prenom FROM UTILISATEUR WHERE identifiant='".$idsaisi."'";
        $prenom=mysql_query($rq3);
        $prenomUser=mysql_result($prenom, 0, 'prenom');
        
        $_SESSION['identifiant'] = $idsaisi;
        $_SESSION['prenom']=$prenomUser;
        
        header ('Location: PageMembre.php');
    }
    else
    {
        echo 'Le mot de passe est éronné';
    }
    
}
else
{
    echo "Le pseudo n'est pas bon";
}


if (isset($_SESSION['identifiant']))
{
    echo 'Bonjour ' . $_SESSION['prenom'];
}


?>


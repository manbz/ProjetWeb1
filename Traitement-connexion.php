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
        
        $rq3="SELECT * FROM UTILISATEUR WHERE identifiant='".$idsaisi."'";
        $recup=mysql_query($rq3);
        $_SESSION['prenom']=mysql_result($recup, 0, 'Prenom');
        $_SESSION['nom']=mysql_result($recup, 0, 'Nom');
        $_SESSION['adresse']=mysql_result($recup, 0, 'Adresse');
        $_SESSION['CP']=mysql_result($recup, 0, 'CodePostal');
        $_SESSION['ville']=mysql_result($recup, 0, 'Ville');
        $_SESSION['email']=mysql_result($recup, 0, 'Email');
        
  
        $_SESSION['identifiant'] = $idsaisi;        
        
        $mdpFaux=FALSE;
        $pseudoFaux=FALSE;
        
        if ($_SESSION['identifiant']=='gestionnaire') 
        {
           header ('Location: PageGestionnaire.php'); 
        }
        else
        {header ('Location: PageMembre.php');}
    }
        
    else //mauvais mot de passe
    {

        header ('Location: Connexion.php');
        
    }
    
}
else
{   //mauvais pseudo

    header ('Location: Connexion.php');
     
}


?>


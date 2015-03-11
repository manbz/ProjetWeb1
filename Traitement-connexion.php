<?php
session_start();

require 'connect.php';
$mdpFaux=FALSE;
$pseudoFaux=FALSE;


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
        $_SESSION['prenom']=mysql_result($recup, 0, 'prenom');
        $_SESSION['nom']=mysql_result($recup, 0, 'nom');
        $_SESSION['adresse']=mysql_result($recup, 0, 'adresse');
        $_SESSION['CP']=mysql_result($recup, 0, 'codePostal');
        $_SESSION['ville']=mysql_result($recup, 0, 'ville');
        $_SESSION['email']=mysql_result($recup, 0, 'email');
        
        

        
        $_SESSION['identifiant'] = $idsaisi;
        //$_SESSION['prenom']=$prenom;
        
        
        $mdpFaux=FALSE;
        $pseudoFaux=FALSE;
        
        header ('Location: PageMembre.php');
    }
    else
    {
        //mauvais mdp
        $mdpFaux=TRUE;
        header ('Location: Connexion.php');
        
    }
    
}
else
{   //mauvais pseudo
    $pseudoFaux=1;
    header ('Location: Connexion.php');
     
}


?>


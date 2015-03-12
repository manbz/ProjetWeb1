<?php
session_start();

$newmdp=$_POST['mdp1'];
$confirmMdp=$_POST['mdp2'];

if ($newmdp==$confirmMdp)
   {
    $rqmdp="UPDATE UTILISATEUR SET mdp='".$newmdp."' WHERE identifiant='".$_SESSION['identifiant']."'";
    mysql_query($rqmdp);
    $_SESSION['mdp']=$newmdp;
    //la requete est bonne mais ca ne marche pas --> ne modifie pas la bdd
    header('Location: PageMembre.php');
   }
 else 
    {
    header ('Location: modifierMotDePasse.php');   
    }

<?php
session_start();

require 'connect.php';

//$pseudoExiste=FALSE;

$identifiant=$_POST['identifiant'];
$mdp=$_POST['mdp'];
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

$rqinscription="SELECT mdp FROM UTILISATEUR WHERE identifiant='".$identifiant."'";
$resincription=mysql_query($rqinscription);
$nbres2=mysql_num_rows($resincription);

if ($nbres2!=0)
    {
    //le pseudo existe déja dans la base de données
    header('Location: Inscription.php');
    $pseudoExiste=TRUE;
    
    }
else 
     {
     $rqinscrip="INSERT INTO UTILISATEUR VALUES('$identifiant','$mdp','$prenom','$nom','$adresse','$CP','$ville','$email','$news')";
     $inscription=mysql_query($rqinscrip);
     $_SESSION['identifiant']=$identifiant;
     $_SESSION['prenom']=$prenom;

     if ($_SESSION['identifiant']=='gestionnaire') 
        {
           header ('Location: PageGestionnaire.php'); 
        }
        else
        {header ('Location: PageMembre.php');}
    }

?>




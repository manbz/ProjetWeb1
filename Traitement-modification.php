<?php
session_start();
require 'connect.php';


$mdp=$_POST['mdp1'];
$confirmMdp=$_POST['mdp2'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$CP=$_POST['codePostal'];
$ville=$_POST['ville'];

if ($mdp==$confirmMdp) 
    {
    if (isset($_POST['prenom']))
        {
            $rqprenom="UPDATE UTILISATEUR SET prenom='".$prenom."' WHERE identifiant='".$_SESSION['identifiant']."'";
            
        }
    
    }




?>
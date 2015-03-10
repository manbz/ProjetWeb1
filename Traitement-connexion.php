<?php
require 'connect.php';
echo $_POST['mdp'];
echo $_POST['identifiant'];

/*$rq='SELECT identifiant FROM UTILISATEUR';
$resultat=mysql_query($rq, $CONNEXION);
$tuple= mysql_fetch_array($resultat);
while ($tuple=  mysql_fetch_array($resultat))
        {echo "$tuple[identifiant]";} */
        
$idsaisi=$_POST['identifiant'];
$rq2="SELECT mdp FROM UTILISATEUR WHERE identifiant='".$idsaisi."'";
$res2=mysql_query($rq2);
$nbresultat=mysql_num_rows($res2);

if ($nbresultat!=0)
{
    //le pseudo est dans la base de données
    echo "ca marche";
    $mdpsaisi=$_POST['mdp'];
    $rq="SELECT mdp FROM UTILISATEUR WHERE identifiant='".$idsaisi."' AND mdp='".$mdpsaisi."'";
    $res=mysql_query($rq);
    $nbresultatmdp=mysql_num_rows($res);
    
    if ($nbresultatmdp!=0) 
    {
        session_start();
        $rq3="SELECT prenom FROM UTILISATEUR WHERE identifiant='".$idsaisi."'";
        $prenomUser=mysql_query($rq3);
        $prenomUser=  mysql_result(prenom, 0);
        $_SESSION['identifiant'] = $idsaisi;
        $_SESSION['prenom']=$prenomUser;
        echo 'Vous êtes connecté !';
        echo 'Le mdp et le pseudo sont ok, COUCOU';
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


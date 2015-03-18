<?php
$SERVEUR="localhost";
$LOGIN="root";
$MDP="root";
$MABASE="SiteWeb";
$CONNEXION=mysql_connect($SERVEUR, $LOGIN, $MDP);
mysql_select_db($MABASE);
?>
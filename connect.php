<?php
$SERVEUR="localhost";
$LOGIN="root";
$MDP="";
$MABASE="happytime";
$CONNEXION=mysql_connect($SERVEUR, $LOGIN, $MDP);
mysql_select_db($MABASE);
?>
<?php
session_start();

while (list($id_membre,$membre)=each($_POST['ListeMembre']))
{echo $membre;}

$nomGroupe=$_POST['nomGroupe'];
echo $nomGroupe;

$rqGroupe="INSERT INTO GROUPE VALUES.....";


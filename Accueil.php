<?php
include 'Header.php';
include 'Body.php';

if (isset($_SESSION['identifiant']))
{
    echo 'Bonjour ' . $_SESSION['identifiant'];
}


?>

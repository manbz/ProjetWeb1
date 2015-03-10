<?php
session_start();
include 'header.php';

if (isset($_SESSION['identifiant']))
        {
            echo 'Bonjour ' . $_SESSION['prenom'];
        }
?>


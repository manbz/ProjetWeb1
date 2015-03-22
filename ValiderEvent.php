<?php
session_start();
require 'connect.php';

$NoEventValidation=$_POST['NoEvent'];

$rqValidationEvenement="UPDATE evenement SET Validation='oui'
                        WHERE NoEvenement='".$NoEventValidation."'";
$validationEvenement=mysql_query($rqValidationEvenement);

header('Location: PageGestionnaire.php');


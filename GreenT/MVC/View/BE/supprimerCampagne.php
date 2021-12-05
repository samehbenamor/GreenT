
<?php
include '../../Controller/evenementController.php';
require_once '../../Model/evenement.php';
$evenementC=new evenementC();
$evenementC->supprimerEvenement($_GET["id"]);
header('Location:evenements.php');
?>


<?php
include '../../Controller/utilisateurController.php';
require_once '../../Model/utilisateur.php';
$utilisateurC=new utilisateurC();
$utilisateurC->supprimerUtilisateur($_GET["idu"]);
header('Location:tables-data.php');
?>


<?php
include '../../Controller/utilisateurController.php';
require_once '../../Model/utilisateur.php';
$utilisateurC=new utilisateurC();
$utilisateur = NULL;
$idu = $_GET["idu"];
$utilisateur = $utilisateurC->recupererUtilisateur($idu);
$utilisateurC->BanUtilisateur($utilisateur, $idu);
header('Location:tables-data.php');
?>

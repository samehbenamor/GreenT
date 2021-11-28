
<?php
include '../../Controller/utilisateurController.php';
require_once '../../Model/utilisateur.php';
$utilisateurC=new utilisateurC();
$utilisateur = NULL;
$idu = $_GET["idu"];
$utilisateur = $utilisateurC->recupererUtilisateur($idu);
var_dump($utilisateur);
//$utilisateurC->banUtilisateur($utilisateur, $idu);
//header('Location:tables-data.php');
?>

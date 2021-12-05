
<?php
include '../../Controller/utilisateurController.php';
require_once '../../Model/utilisateur.php';
$utilisateurC=new utilisateurC();
$utilisateur = NULL;
$idu = $_GET["idu"];
$utilisateur = $utilisateurC->recupererUtilisateur($idu);
var_dump($utilisateur);
if($utilisateur["banned"] == 1){
    $utilisateurC->unBanUtilisateur($idu);
}
else {
    $utilisateurC->banUtilisateur($idu);
}

header('Location:tables-data.php');
?>

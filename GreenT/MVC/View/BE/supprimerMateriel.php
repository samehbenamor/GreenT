
<?php
include '../../Controller/materielController.php';
require_once '../../Model/materiel.php';
$materielC=new materielC();
$materielC->supprimerMateriel($_GET["id"]);
header('Location:materiel.php');
?>

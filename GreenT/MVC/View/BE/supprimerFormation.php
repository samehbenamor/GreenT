
<?php
include '../../Controller/formationController.php';
require_once '../../Model/formation.php';
$formationC=new formationC();
$formationC->supprimerFormation($_GET["id"]);
header('Location:formations.php');
?>

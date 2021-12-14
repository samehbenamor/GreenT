<?php 
include '../../Controller/formationController.php';
require_once '../../Model/formation.php';
$formationC=new formationC();
$formation = NULL;

$id = $_GET["id"];
$formationC->likeFormation($id);

header('Location:formations.php');


?>
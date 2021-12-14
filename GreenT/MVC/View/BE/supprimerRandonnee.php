
<?php
include '../../Controller/randonnéea.php';
require_once '../../Model/randonnée.php';
$randonneC=new randonnéea();
$randonneC->supprimerrandonnée($_GET["id"]);
header('Location:randonne.php');
?>
<?php
     include '../../model/randonnée.php';
     include '../../controller/randonnéea.php';
     $randonnée= new randonnéea();
if (isset($_POST["destination"])){
	$randonnée->tri();
	header('Location: portfolio.php');
}
if (isset($_POST["datea"])){
	$randonnée->trid();
	header('Location: portfolio.php');
}
?>
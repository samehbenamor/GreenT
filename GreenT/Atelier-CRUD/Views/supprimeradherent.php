<?php
	include '../Controller/AdherentC.php';
	$adherentC=new AdherentC();
	$adherentC->supprimeradherent($_GET["NumAdherent"]);
	header('Location:afficherListeAdherents.php');
?>
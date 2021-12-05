
<?php
include '../../Controller/commentaireController.php';
require_once '../../Model/commentaire.php';
$commentaireC=new commentaireC();
$commentaireC->supprimerCommentaire($_GET["id"]);
header('Location:commentaire.php');
?>

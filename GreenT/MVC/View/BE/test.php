<?php
include '../../controller/randonnéea.php';
$error="";
$randonnée= null;
$randonnéea= new randonnéea();
/*$image = $_FILES["image"];

        $img_name = $_FILES['image']['name'];
	    $img_size = $_FILES['image']['size'];
	    $tmp_name = $_FILES['image']['tmp_name'];
	    $error = $_FILES['image']['error'];
        if ($error === 0) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
    
            $allowed_exs = array("jpg", "jpeg", "png", "gif"); 
    
            if (in_array($img_ex_lc, $allowed_exs)) 
            {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = '../FE/uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
    
                
            }
        }*/
$randonnée= new randonnée(
    $_POST['destination'],
    $_POST['descriptiona'],
    $_POST['prix'],
    $_POST['datea'],
    $_POST['idc']/*,
    $new_img_name*/
);
$randonnéea->ajouterrandonnée($randonnée);
header('Location:randonne.php');
?>

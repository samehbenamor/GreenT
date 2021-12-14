<?php

include_once '../../config.php';
include_once '../../model/categorie.php';


class categoriea{
	function affichercategorie(){
		$sql="SELECT * FROM categoriea";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
   
    function ajoutercategorie($categorie){
        $sql= "INSERT INTO categoriea(idc,typec)
        VALUES( :idc, :typec )";
        $db = config::getconnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'idc'=>$randonnée->getidc(),
                'typec'=>$randonnée->gettypec(),
            ]);
        
        }
        catch(Exception $e){
            echo 'Erreur' .$e->getMessage();
        
        }
        }
	
}
?>
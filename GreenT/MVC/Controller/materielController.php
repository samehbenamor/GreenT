<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\Model\materiel.php';
	//include_once '../Model/utilisateur.php';
	class materielC {
		function afficherMateriel(){
			$sql="SELECT * FROM materiel";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function afficherMaterielBlog($id){
			$sql="SELECT * FROM materiel where post_id=$id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function recupererMateriel($id){
			$sql="SELECT * from materiel where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$materiel=$query->fetch();
				return $materiel;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function supprimerMateriel($id){
			$sql="DELETE FROM materiel WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterMateriel($materiel){
			$sql="INSERT INTO materiel (nom, typem, post_id) 
			VALUES (:nom,:typem,:post_id)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $materiel->getNom(),
					'typem' => $materiel->getType(),
                    'post_id' => $materiel->getPost()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		
		function modifierCommentaire($materiel, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE materiel SET 
						nom= :nom, 
						typem= :typem,
                        post_id= :post_id
					WHERE id= :id'
				);
				$query->execute([
					'nom' => $materiel->getNom(),
					'typem' => $materiel->getType(),
                    'post_id' => $materiel->getPost(),
					'id' => $id
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
        

	}
?>
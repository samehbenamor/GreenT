<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\Model\evenement.php';
	//include_once '../Model/utilisateur.php';
	class commentaireC {
		function afficherCommentaire(){
			$sql="SELECT * FROM commentaire";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function afficherCommentaireForBlog($id){
			$sql="SELECT * FROM commentaire where post_id=$id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function recupererCommentaire($id){
			$sql="SELECT * from commentaire where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$commentaire=$query->fetch();
				return $commentaire;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function supprimerCommentaire($id){
			$sql="DELETE FROM commentaire WHERE id=:id";
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
		function ajouterCommentaire($commentaire){
			$sql="INSERT INTO commentaire (user_id, post_id, body) 
			VALUES (:user_id,:post_id,:body)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'user_id' => $commentaire->getUser(),
					'post_id' => $commentaire->getPost(),
                    'body' => $commentaire->getBody()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		
		function modifierCommentaire($commentaire, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commentaire SET 
						user_id= :user_id, 
						post_id= :post_id,
                        body= :body
					WHERE id= :id'
				);
				$query->execute([
					'user_id' => $commentaire->getUser(),
					'post_id' => $commentaire->getPost(),
                    'body' => $commentaire->getBody(),
					'id' => $id
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
        

	}
?>
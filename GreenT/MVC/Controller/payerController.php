<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\Model\payer.php';
	//include_once '../Model/utilisateur.php';
	class DonC {
		function afficherDon(){
			$sql="SELECT * FROM don";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerDon($id){
			$sql="DELETE FROM don WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterDon($don){
			$sql="INSERT INTO don (nom, prenom, adresse, numc , dateex, code) 
			VALUES (:nom,:prenom,:adresse, :numc , :dateex, :code)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $don->getNom(),
					'prenom' => $don->getPrenom(),
                    'adresse' => $don->getAdresse(),
                    'numc' => $don->getNumc(),
					'dateex' => $don->getDateex(),
                    'code' => $don->getCode()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererDon($id){
			$sql="SELECT * from don where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$don=$query->fetch();
				return $don;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierDon($don, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE don SET 
						nom= :nom, 
						prenom= :prenom,
                        adresse= :adresse,
                        numc= :numc, 
						dateex= :dateex, 
                        code= :code
					WHERE id= :id'
				);
				$query->execute([
					'nom' => $don->getNom(),
					'prenom' => $don->getPrenom(),
					'adresse' => $don->getAdresse(),
					'numc' => $don->getNumc(),
                    'dateex' => $don->getDateex(),
                    'code' => $don->getCode()
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>
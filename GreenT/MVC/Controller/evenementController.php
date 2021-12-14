<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\Model\evenement.php';
	//include_once '../Model/utilisateur.php';
	class evenementC {
		function afficherEvenement(){
			$sql="SELECT * FROM evenement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function afficherEvenementSearch($keyword){
			//var_dump($keyword);
			$sql="SELECT * FROM evenement WHERE ville LIKE $keyword";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
        function afficherEvenementTunis(){
			$sql="SELECT * FROM evenement WHERE ville = 'Tunis' OR ville = 'tunis'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
        function afficherEvenementAutre(){
			$sql="SELECT * FROM evenement WHERE ville != 'Tunis' OR ville != 'tunis'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerEvenement($id){
			$sql="DELETE FROM evenement WHERE id=:id";
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
		function ajouterEvenement($evenement){
			$sql="INSERT INTO evenement (ville, dateeve, descrip, titre) 
			VALUES (:ville,:dateeve,:descrip, :titre)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'ville' => $evenement->getVille(),
					'dateeve' => $evenement->getDate(),
                    'descrip' => $evenement->getDesc(),
                    'titre' => $evenement->getTitre()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererEvenement($id){
			$sql="SELECT * from evenement where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$evenement=$query->fetch();
				return $evenement;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierEvenement($evenement, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE evenement SET 
						ville= :ville, 
						dateeve= :dateeve,
                        descrip= :descrip,
                        titre= :titre
					WHERE id= :id'
				);
				$query->execute([
					'ville' => $evenement->getVille(),
					'dateeve' => $evenement->getDate(),
                    'descrip' => $evenement->getDesc(),
                    'titre' => $evenement->getTitre(),
					'id' => $id
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>
<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\Model\utilisateur.php';
	//include_once '../Model/utilisateur.php';
	class utilisateurC {
		function afficherUtilisateur(){
			$sql="SELECT * FROM utilisateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerUtilisateur($idu){
			$sql="DELETE FROM utilisateur WHERE idu=:idu";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idu', $idu);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterUtilisateur($utilisateur){
			$sql="INSERT INTO utilisateur (nom, prenom, email, mdp , adresse, tel, ville, rolee, banned) 
			VALUES (:nom,:prenom,:email, :mdp , :adresse, :tel, :ville, :rolee, :banned)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $utilisateur->getNom(),
					'prenom' => $utilisateur->getPrenom(),
                    'email' => $utilisateur->getEmail(),
                    'mdp' => $utilisateur->getMdp(),
					'adresse' => $utilisateur->getAdresse(),
                    'tel' => $utilisateur->getTel(),
                    'ville' => $utilisateur->getVille(),
                    'rolee' => $utilisateur->getRole(),
					'banned' => $utilisateur->getBanned()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererUtilisateur($idu){
			$sql="SELECT * from utilisateur where idu=$idu";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$utilisateur=$query->fetch();
				return $utilisateur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierUtilisateur($utilisateur, $idu){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
						nom= :nom, 
						prenom= :prenom,
                        email= :email,
                        mdp= :mdp, 
						adresse= :adresse, 
                        tel= :tel, 
                        ville= :ville, 
                        rolee= :rolee,
						banned= :banned
					WHERE idu= :idu'
				);
				$query->execute([
					'nom' => $utilisateur->getNom(),
					'prenom' => $utilisateur->getPrenom(),
					'email' => $utilisateur->getEmail(),
                    'mdp' => $utilisateur->getMdp(),
					'adresse' => $utilisateur->getAdresse(),
                    'tel' => $utilisateur->getTel(),
                    'ville' => $utilisateur->getVille(),
                    'rolee' => $utilisateur->getRole(),
					'banned' => $utilisateur->getBanned(),
					'idu' => $idu
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				var_dump($e->getMessage());
			}
		}

		function banUtilisateur($utilisateur, $idu){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
						banned= 1
					WHERE idu= :idu'
				);
				$query->execute([
					'banned' => $utilisateur->getBanned(),
					'idu' => $idu
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				var_dump($e->getMessage());
			}
		}



	}
?>
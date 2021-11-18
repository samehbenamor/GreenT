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
			$sql="INSERT INTO utilisateur (nom, prenom, email, mdp, adresse, tel, ville, rolee) 
			VALUES (:nom,:prenom,:email, :mdp,:adress, :tel, :ville, :rolee)";
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
                    'rolee' => $utilisateur->getRole()
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

				$adherent=$query->fetch();
				return $utilisateur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieradherent($utilisateur, $idu){
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
                        rolee= :rolee
					WHERE idu= :idu'
				);
				$query->execute([
					'nom' => $utilisateur->getNom(),
					'prenom' => $utilisateur->getPrenom(),
					'adresse' => $utilisateur->getAdresse(),
					'email' => $utilisateur->getEmail(),
                    'mdp' => $utilisateur->getMdp(),
                    'tel' => $utilisateur->getTel(),
                    'ville' => $utilisateur->getVille(),
                    'rolee' => $utilisateur->getRole()
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>
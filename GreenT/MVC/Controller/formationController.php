<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\Model\formation.php';
	//include_once '../Model/utilisateur.php';
	class formationC {
		function afficherFormation(){
			$sql="SELECT * FROM formation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherFormationFree(){
			$sql="SELECT * FROM formation WHERE etat=1";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherFormationPayante(){
			$sql="SELECT * FROM formation WHERE etat=2 OR etat=3";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function supprimerFormation($id){
			$sql="DELETE FROM formation WHERE id=:id";
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
		function ajouterFormation($formation){
			$sql="INSERT INTO formation (titre, theme, descp, etat) 
			VALUES (:titre,:theme,:descp, :etat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'titre' => $formation->getTitre(),
					'theme' => $formation->getTheme(),
                    'descp' => $formation->getDescp(),
                    'etat' => $formation->getEtat()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererFormation($id){
			$sql="SELECT * from formation where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$formation=$query->fetch();
				return $formation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierFormation($formation, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE formation SET 
						titre= :titre, 
						theme= :theme,
                        descp= :descp,
                        etat= :etat,
						likes =:likes
					WHERE id= :id'
				);
				$query->execute([
					'titre' => $f0ormation->getTitre(),
					'theme' => $formation->getTheme(),
                    'descp' => $formation->getDescp(),
                    'etat' => $formation->getEtat(),
					'likes' => $formation->getLikes(),
					'id' => $id
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				var_dump($e->getMessage());
			}
		}
		function likeFormation($id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE formation SET 
						likes = likes + 1
					WHERE id= :id'
				);
				$query->execute([
					'id' => $id
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>
<?php
include '../../config.php';
include '../../Model/randonnée.php';


class randonnéea{
	function afficherrandonnée(){
		$sql="SELECT * FROM randonnéea";
		$db = config::getconnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function afficherrandonné($des){
		$sql="SELECT * FROM randonnéea where destination='$des'";
		$db = config::getconnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
    function supprimerrandonnée($id){
		$sql = "DELETE FROM randonnéea WHERE id =:id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
			$req->execute();
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}

	}
    function ajouterrandonnée($randonnée){
        $sql= "INSERT INTO randonnéea(destination,descriptiona,prix,datea,idc/*,image*/)
        VALUES(:destination, :descriptiona, :prix, :datea,:idc/*,:image*/)";
        $db = config::getconnexion();
    
		try{
            $query = $db->prepare($sql);
            $query->execute([
                
                'destination'=>$randonnée->getdestination(),
                'descriptiona'=>$randonnée->getdescriptiona(),
                'prix'=>$randonnée->getprix(),
                'datea'=>$randonnée->getdatea(),
				'idc'=>$randonnée->getidc()/*,
				'image'=>$randonnée->getimage()*/
				
            ]);
        
        }
        catch(Exception $e){
            echo 'Erreur' .$e->getMessage();
        
        }
        }
		function recupererrandonnée($id){
			$sql="SELECT * from randonnéea where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$randonnée=$query->fetch();
				return $randonnée;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierrandonnée($randonnéea, $id)
		{
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE randonnéea SET 
						destination= :destination, 
						descriptiona= :descriptiona, 
						prix= :prix, 
						datea= :datea, 
						idc= :idc
					WHERE id= :id'
				);
				$query->execute([
					'destination' => $randonnéea->getdestination(),
					'descriptiona' => $randonnéea->getdescriptiona(),
					'prix' => $randonnéea->getprix(),
					'datea' => $randonnéea->getdatea(),
					'idc' => $randonnéea->getidc(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function tri()
		{
			$sql="SELECT * FROM randonnéea  order by destination ";
			$db =config::getConnexion();
			try{
			 $list=$db->query($sql);
			 return $list;
			}
			  catch (Exception $e)
		 { die('Erreur:'.$e->getMessage());}
		}
		function trid()
		{
			$sql="SELECT * FROM randonnéea  order by datea ";
			$db =config::getConnexion();
			try{
			 $list=$db->query($sql);
			 return $list;
			}
			  catch (Exception $e)
		 { die('Erreur:'.$e->getMessage());}
		}
}
?>
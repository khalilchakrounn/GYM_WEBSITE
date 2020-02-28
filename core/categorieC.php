<?PHP
include "../config.php";
include "../entites/categorie.php";
class categorieC {
	
	function ajouter_categorie($categorie){
		$sql="insert into categorie (nom,description) values (:nom,:description)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);					        
					       
					        $nom=$categorie->getnom();
					        $description=$categorie->getdescription();
					        					
									$req->bindValue(':nom',$nom);
									$req->bindValue(':description',$description);
									
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	function afficher_categorie(){
		$sql="SElECT id,nom,description From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimer_categorie($idd){
		$sql="DELETE FROM categorie where id= :idd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifier_categorie($categorie,$id){
		$sql="UPDATE categorie SET nom=:nom,description=:description WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        												
					        $nom=$categorie->getnom();					        
					        $description=$categorie->getdescription();					       

		$datas = array(':id'=>$id, ':nom'=>$nom,':description'=>$description);
									$req->bindValue(':id',$id);									
									$req->bindValue(':nom',$nom);									
									$req->bindValue(':description',$description);
									
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_categorie($id){
		$sql="SELECT * from categorie where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}

    
       function rechercher_categorie($mot)
   {
       $sql="SELECT * FROM categorie where id like'%".$mot."%'or nom like'%".$mot."%' ";
 
       $db =config::getConnexion();
       try{
        $list=$db->query($sql);
        return $list;
       }
         catch (Exception $e)
    { die('Erreur:'.$e->getMessage());}
   }
    


?>
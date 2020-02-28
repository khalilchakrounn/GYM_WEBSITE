<?PHP
include "../config.php";
include "../entites/abonement.php";
class abonementC {
	
	function ajouter_abonement($abonement){
		$sql="insert into abonement (nom_abonement,cour,duree,prix,image) values (:nom_abonement,:cour,:duree,:prix,:image)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);

					        
					        $nom_abonement=$abonement->getnom_abonement();
					        $cour=$abonement->getcour();
					        $duree=$abonement->getduree();
					        $prix=$abonement->getprix();	
					        $image=$abonement->getimage();
									
									$req->bindValue(':nom_abonement',$nom_abonement);
									$req->bindValue(':cour',$cour);
									$req->bindValue(':duree',$duree);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':image',$image);
				
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	function afficher_abonement(){
		$sql="SElECT id,nom_abonement,duree,cour,prix From abonement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficher_abonement_front(){
		$sql="SElECT * From abonement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimer_abonement($idd){
		$sql="DELETE FROM abonement where id= :idd";
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


	function modifier_abonement($abonement,$id){
		$sql="UPDATE abonement SET nom_abonement=:nom_abonement,cour=:cour,duree=:duree,prix=:prix,image=:image WHERE id=:id"; 
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        					$nom_abonement=$abonement->getnom_abonement();
					        $cour=$abonement->getcour();
					        $duree=$abonement->getduree();
					        $prix=$abonement->getprix();	
					       $image=$abonement->getimage();


		$datas = array(':nom_abonement'=>$nom_abonement,':cour'=>$cour,':duree'=>$duree,':prix'=>$prix, ':image'=>$image);
									$req->bindValue(':id',$id);
									$req->bindValue(':nom_abonement',$nom_abonement);
									$req->bindValue(':cour',$cour);
									$req->bindValue(':duree',$duree);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':image',$image);
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_abonement($id){
		$sql="SELECT * from abonement where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	




function acheter_abonement($id_abonement,$id_client){
		$sql="insert into client (id_abonement) values (:id_abonement) where id=:id_client";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);
									$req->bindValue(':id_abonement',$id_abonement);				
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	}
?>
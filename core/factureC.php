<?PHP
class factureC {

	
	function ajouterFacture($facture){
		$sql="insert into facture (id_cmd,nom_prenom,adresse,region,ville,mode_livraison,mode_paiement,nom_prod,quantite,prix,total) values (:id_cmd,:nom_prenom,:adresse,:region,:ville,:mode_livraison,:mode_paiement,:nom_prod,:quantite,:prix,:total)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$id_cmd=$facture->getId_cmd();
        $nom_prenom=$facture->getNom_prenom();
        $adresse=$facture->getAdresse();
        $region=$facture->getRegion();
        $ville=$facture->getVille();
        $mode_livraison=$facture->getMode_livraison();
        $mode_paiement=$facture->getMode_paiement();
        $nom_prod=$facture->getNom_prod();
        $quantite=$facture->getQuantite();
 
        $prix=$facture->getPrix();
        $total=$facture->getTotal();
        
        $req->bindValue(':id_cmd',$id_cmd);
		$req->bindValue(':nom_prenom',$nom_prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':region',$region);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mode_livraison',$mode_livraison);
		$req->bindValue(':mode_paiement',$mode_paiement);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
	
		$req->bindValue(':prix',$prix);
		$req->bindValue(':total',$total);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherFacture(){
		//$sql="SElECT * From facture e inner join formationphp.facture a on e.nom_prenom= a.nom_prenom";
		$sql="SElECT * From facture";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerFacture($id){
		$sql="DELETE FROM facture where id_cmd=:id_cmd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_cmd',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function supprimerFactureID($id){
		$sql="DELETE FROM facture where id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierFacture($facture,$id){
		$sql="UPDATE facture SET  id_cmd=:id_cmd , nom_prenom=:nom_prenom, adresse=:adresse , region=:region , ville=:ville , mode_livraison=:mode_livraison , nom_prod=:nom_prod , quantite=:quantite , prix=:prix , total=:total WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{	//$id=$_GET['id'];
        $req=$db->prepare($sql);
        
		
        $id_cmd=$facture->getId_cmd();
        $nom_prenom=$facture->getNom_prenom();
        $adresse=$facture->getAdresse();
        $region=$facture->getRegion();
        $ville=$facture->getVille();
        $mode_livraison=$facture->getMode_livraison();
      
        $nom_prod=$facture->getNom_prod();
        $quantite=$facture->getQuantite();
  
        $prix=$facture->getPrix();
        $total=$facture->getTotal();
        
       // $datas = array( ':id_cmd'=>$id_cmd , ':nom_prenom'=>$nom_prenom, ':adresse'=>$adresse,':region'=>$region,':ville'=>$ville,':mode_livraison'=>$mode_livraison, ':mode_paiement'=>$mode_paiement ,':nom_prod'=>$nom_prod , ':quantite'=>$quantite , ':taille'=>$taille , ':prix'=>$prix ,':total'=>$total);

$req->bindValue(':id',$id);
		 $req->bindValue(':id_cmd',$id_cmd);
		$req->bindValue(':nom_prenom',$nom_prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':region',$region);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mode_livraison',$mode_livraison);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
	
		$req->bindValue(':prix',$prix);
	$req->bindValue(':total',$prix);
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   //echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	function recupererFacture($id){
		$sql="SELECT * from facture where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recupererFacturenom($nom){
		$sql="SELECT * from facture where nom_prenom='$nom'";
		$db = config::getConnexion();
		try{

		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function recupererFactureC($id){
		$sql="SELECT * from facture where id_cmd=$id";
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

?>
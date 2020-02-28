<?PHP
include "C:/wamp64/www/website_GYM/config.php";
class courC {

	
	function ajouterCour($cour){
		$sql="insert into cour (datet,nom,prenom,horaire,message,coure,telephone) values (:datet,:nom,:prenom,:horaire,:message,:coure,:telephone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $date=$cour->getdate();
        $nom=$cour->getnom();
        $prenom=$cour->getprenom();
        $horaire=$cour->gethoraire();
        $message=$cour->getmessage();
         $coure=$cour->getcoure();
          $telephone=$cour->gettelephone();
			
		$req->bindValue(':datet',$date);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':horaire',$horaire);
		$req->bindValue(':message',$message);
		$req->bindValue(':coure',$coure);
		$req->bindValue(':telephone',$telephone);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercour(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From cour";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercour($id){
		$sql="DELETE FROM cour where id= :id";
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
	function modifiercour($cour,$id){
		$sql="UPDATE cour SET  datet=:datet,nom=:nom,prenom=:prenom,horaire=:horaire,message=:message,coure=coure,telephone=:telephone WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       
		$datet=$cour->getdate();
        $nom=$cour->getnom();
        $prenom=$cour->getprenom();
        $horaire=$cour->gethoraire();
        $message=$cour->getmessage();
         $coure=$cour->getcoure();
          $telephone=$cour->gettelephone();
		$datas = array(':id'=>$id,':datet'=>$datet,':nom'=>$nom,':prenom'=>$prenom,':horaire'=>$horaire,':message'=>$message,':coure'=>$coure,':telephone'=>$telephone);
	$req->bindValue(':id',$id);
		$req->bindValue(':datet',$datet);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':horaire',$horaire);
		$req->bindValue(':message',$message);
		$req->bindValue(':coure',$coure);
		$req->bindValue(':telephone',$telephone);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercour($id){
		$sql="SELECT * from cour where id=$id";
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
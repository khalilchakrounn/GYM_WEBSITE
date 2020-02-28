<?PHP
include_once "C:/wamp64/www/website_GYM/config.php";
class coachbC {

	
	function ajouterCoachb($coachb){
		$sql="insert into coachess (nom,prenom,specialite,email,image) values (:nom,:prenom,:specialite,:email,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$coachb->getnomm();
        $prenom=$coachb->getprenomm();
        $specialite=$coachb->getspecialite();
 $email=$coachb->getemail();
	$image=$coachb->getimage();		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':specialite',$specialite);
$req->bindValue(':email',$email);
	$req->bindValue(':image',$image);	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercoachb(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From coachess";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercoachb($id){
		$sql="DELETE FROM coachess where id=:id";
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
	function modifiercoachb($coachb,$id){
		$sql="UPDATE coachess SET  nom=:nom,prenom=:prenom,specialite=:specialite,email=:email,image=:image WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       
    $nom=$coachb->getnomm();
        $prenom=$coachb->getprenomm();
        $specialite=$coachb->getspecialite();
$email=$coachb->getemail();
$image=$coachb->getimage();
 $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':specialite',$specialite);
$req->bindValue(':email',$email);
$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
		
	}
	function recuperercoachb($id){
		$sql="SELECT * from coachess where id=$id";
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
<?PHP
include_once "C:/wamp64/www/website_GYM/config.php";
class courbC {

	
	function ajouterCourb($courb){
		$sql="insert into programme (cour,temps,descrip) values (:cour,:temps,:descrip)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cour=$courb->getcour();
        $temps=$courb->gettemps();
        $descrip=$courb->getdes();

			
		$req->bindValue(':cour',$cour);
		$req->bindValue(':temps',$temps);
		$req->bindValue(':descrip',$descrip);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercourb(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From programme";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercourb($id){
		$sql="DELETE FROM programme where id=:id";
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
	function modifiercourb($courb,$id){
		$sql="UPDATE programme SET  cour=:cour,temps=:temps,descrip=:descrip WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       
    $cour=$courb->getcour();
        $temps=$courb->gettemps();
        $descrip=$courb->getdes();

		$req->bindValue(':id',$id);	
		$req->bindValue(':cour',$cour);
		$req->bindValue(':temps',$temps);
		$req->bindValue(':descrip',$descrip);


		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
		
	}
	function recuperercourb($id){
		$sql="SELECT * from programme where id=$id";
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
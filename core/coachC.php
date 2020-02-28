<?PHP
include_once "C:/wamp64/www/website_GYM/config.php";
class coachC {

	
	function ajoutercoach($coach){
		$sql="insert into coach (date,nom,prenom,horaire,message,coache,telephone) values (:date,:nom,:prenom,:horaire,:message,:coache,:telephone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $date=$coach->getdate();
        $nom=$coach->getnom();
        $prenom=$coach->getprenom();
        $horaire=$coach->gethoraire();
        $message=$coach->getmessage();
         $coache=$coach->getcoache();
          $telephone=$coach->gettelephone();
		$req->bindValue(':date',$date);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':horaire',$horaire);
		$req->bindValue(':message',$message);
		$req->bindValue(':coache',$coache);
		$req->bindValue(':telephone',$telephone);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function row_count_coach($coache,$horaire,$date){
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "site_web";


$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT * FROM coach where (coache='$coache' && date='$date' && horaire='$horaire')";

$result1 = mysqli_query($connect, $query);
$rowcount=mysqli_num_rows($result1);
return $rowcount;

}
	function affichercoach(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From coach";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercoach($id){
		$sql="DELETE FROM coach where id= :id";
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

    


	function modifiercoach($coach,$id){
		$sql="UPDATE cour SET date=:date, nom=:nom,prenom=:prenom,horaire=:horaire,message=:message,coache=coache,telephone=:telephone WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$date=$cour->getdate();
        $nom=$cour->getnom();
        $prenom=$cour->getprenom();
        $horaire=$cour->gethoraire();
        $message=$cour->getmessage();
         $coache=$cour->getcoache();
          $telephone=$cour->gettelephone();
		$datas = array(':date'=>$date,':nom'=>$nom,':prenom'=>$prenom,':horaire'=>$horaire,':message'=>$message,':coache'=>$coache,':telephone'=>$telephone);
		
		$req->bindValue(':date',$date);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':horaire',$horaire);
		$req->bindValue(':message',$message);
		$req->bindValue(':coache',$coache);
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
	function recuperercoach($id){
		$sql="SELECT * from coach where id=$id";
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
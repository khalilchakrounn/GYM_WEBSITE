<?PHP
include "../config.php";
class Clients {

	 function id()
	{
		$sql=" select ID_CLIENT from Client ORDER BY ID_CLIENT DESC LIMIT 1" ;
		$db = config::getConnexion();
      $req=$db->prepare($sql);
     $req->execute(); 

$result = $req->fetch();

$C1 = $result[0];
//echo $C1;
  return $C1;


}

		
	
	function ajouterClient($Client){
		$sql="insert into client (USERNAME,EMAIL,PASSWORD,Firstname,Lastname,mobile,sexe,IMAGE,BIRTHDAY,adresse,token) values (:USERNAME,:EMAIL,:PASSWORD ,:Firstname,:Lastname,:mobile,:sexe,:IMAGE,:BIRTHDAY,:adresse,:token)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $USERNAME=$Client->getUsername();
        $EMAIL=$Client->getEmail();
        $PASSWORD=$Client->getpassword();
        $Firstname=$Client->getFIRSTNAME();
        $Lastname=$Client->getLASTNAME();
        $BIRTHDAY=$Client->getBirthday();
        $IMAGE=$Client->getImage();
        $mobile=$Client->getMobile();
        $sexe=$Client->getSexe();
        $adresse=$Client->getAdresse();
         
    $token=$Client->getToken();

		$req->bindValue(':USERNAME',$USERNAME);
		$req->bindValue(':EMAIL',$EMAIL);
		$req->bindValue(':PASSWORD',$PASSWORD);
		$req->bindValue(':Firstname',$Firstname);
		$req->bindValue(':Lastname',$Lastname);
		$req->bindValue(':BIRTHDAY',$BIRTHDAY);
		$req->bindValue(':IMAGE',$IMAGE);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':adresse',$adresse);
	$req->bindValue(':token',$token);
          $req->execute();
           
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}


	
	function modifierClient($Client){
		
		$sql="UPDATE Client SET USERNAME=:USERNAME,adresse=:adresse,mobile=:mobile,EMAIL=:EMAIL WHERE ID_CLIENT='32' ";
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
		$USERNAME=$Client->getUsername();
        $EMAIL=$Client->getEmail();
        $mobile=$Client->getMobile();
        $adresse=$Client->getAdresse();
      
          
		$req->bindValue(':USERNAME',$USERNAME);
		$req->bindValue(':EMAIL',$EMAIL);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':adresse',$adresse);
		
        $req->execute();
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

function modifierImage($Client){
		
		$sql="UPDATE Client SET IMAGE=:IMAGE WHERE ID_CLIENT='32' ";
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
		$IMAGE=$Client->getImage();
   
      
          
		$req->bindValue(':IMAGE',$IMAGE);

		
        $req->execute();
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

	function modifierMDP($Client){
		
		$sql="UPDATE Client SET PASSWORD=:PASSWORD WHERE ID_CLIENT='32' ";
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
		$PASSWORD=$Client->getpassword();
   
      
          
		$req->bindValue(':PASSWORD',$PASSWORD);

		
        $req->execute();
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

	
	function afficherClient(){
		$sql="SElECT * From client WHERE ID_CLIENT='32'";
		$db = config::getConnexion();
		try{
		$info=$db->query($sql);
		return $info;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}


function afficherClients(){


	$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$info=$db->query($sql);
		return $info;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}



function entete(){


		$sql="DESC client";
		$db = config::getConnexion();
		try{
		$requete=$db->query($sql);
		$entete = $requete->fetchAll();
		return $entete;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}


	function NombreReclamation_tr(){
			$sql=" SELECT COUNT(*)   FROM reclamation WHERE (ID_client='32' and ETAT='not treated ')" ;
		$db = config::getConnexion();
		try{
      $req=$db->prepare($sql);
     $req->execute(); 

$result = $req->fetch();
echo $result[0];
 }

catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

	}

	function NombreReclamation(){
			$sql=" SELECT COUNT(*)   FROM reclamation WHERE  ID_client='32'" ;
		$db = config::getConnexion();
		try{
      $req=$db->prepare($sql);
     $req->execute(); 

$result = $req->fetch();
echo $result[0];
 }

catch (Exception $err){

  }

	}





 function activer($email){
         $var= $email ;
        

 		$sql ="UPDATE client SET EmailConfirmed='1', token='' WHERE EMAIL='$var'";
 		$db = config::getConnexion();
 		try{
    
      $req=$db->prepare($sql);
     $req->execute(); 
			echo 'Your email has been verified! You can log in now!';
			echo $var;
			
			   return ("ok");
			}

catch (Exception $err){
 return ("no");
  }

		

 
}
















}

?>
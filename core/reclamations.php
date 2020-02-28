<?PHP
include "config.php";
class reclamations {



	function ajouterReclamaion($reclamation){
		$sql="insert into reclamation (Username,TYPE,CONTENU,ID_client) values (:USERNAME,:type,:contenu,:ID_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $USERNAME=$reclamation->getUsername();
        $type=$reclamation->gettyp();
        $contenu=$reclamation->getmessage();
 
        $ID_client=$reclamation->getID();
		$req->bindValue(':USERNAME',$USERNAME);
		$req->bindValue(':type',$type);
		$req->bindValue(':contenu',$contenu);
		
        $req->bindValue(':ID_client',$ID_client);
          $req->execute();
           
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}


	

  function REChRecl($search){
         $var=$search;

        $query = "
  SELECT * FROM reclamation 
  WHERE Id_reclamation LIKE '%".$var."%'
  OR Username LIKE '%".$var."%' 
  OR ID_client LIKE'%".$var."%' 
  OR ETAT LIKE '%".$var."%' 
  OR TYPE LIKE '%".$var."%'
    
    ORDER BY Id_reclamation DESC
  ";

     $db = config::getConnexion();
        try{
       
       
       

           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }



  function AFFRecl(){
         
        $query = "
  SELECT * FROM reclamation ORDER BY Id_reclamation DESC ";

     $db = config::getConnexion();
        try{
       
       
       

           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }





    function SuppReclamaion($id){
         $var=$id;
        $sql = "DELETE FROM reclamation WHERE Id_reclamation ='". $var. "'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }

        function Enable($id){
         $var=$id;
       $sql = "UPDATE reclamation SET  ETAT = 'treated' WHERE Id_reclamation = '".$var."'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
       function Disable($id){
         $var=$id;
       $sql = "UPDATE reclamation SET  ETAT = 'not treated' WHERE Id_reclamation = '".$var."'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }




}

?>
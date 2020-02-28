<?PHP
include "C:/wamp64/www/website_GYM/config.php";
class promoC {

	
	function ajouterPromo($promo){
		$sql="insert into promo (nom,idp,pour) values (:nom, :idp,:pour)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$promo->getNom();
        $idp=$promo->getIdp();
        $pour=$promo->getPour();
       if(empty($nom) || empty($idp) || empty($pour) )
       {
          echo "Erreur";
       }
       else
       {
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idp',$idp);
		$req->bindValue(':pour',$pour);
		
            $req->execute();
        }   
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



    function afficherPromo(){

    $sql="SELECT promo.id,produits.id,promo.nom,promo.pour,produits.prix,produits.prix_promo FROM promo  
 inner join produits on promo.idp=produits.id";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }


    function supprimerPromo($id){
    $sql="DELETE FROM promo where id= :id";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }

    function supprimerPromo_all(){
    $sql="DELETE FROM promo ";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    
    try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  function modifierPromo($promo,$id){
    
    $sql="UPDATE promo SET nom=:nom, idp=:idp,pour=:pour WHERE id=:id";
   
    $db = config::getConnexion();
 
try{    $id=$_GET['id'];
        $req=$db->prepare($sql);
        

        $nom=$promo->getNom();
        $idp=$promo->getIdp();
        $pour=$promo->getPour();
    
    $datas = array( ':nom'=>$nom,':idp'=>$idp,':pour'=>$pour);
  
 $req->bindValue(':id',$id);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':idp',$idp);
    $req->bindValue(':pour',$pour);

    
    
            $s=$req->execute();
         
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
  }

  function updatePromo_Produit($id,$pour){
    $sql="UPDATE produits SET  prix_promo=prix-prix*$pour/100 WHERE id=:id";
    
    $db = config::getConnexion();
 
try{    
        $req=$db->prepare($sql);
         
        
        
    
  
 $req->bindValue(':id',$id);


    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;

        }
    
  }
  function suppPromo_Produit($id){
    $sql="UPDATE produits SET etat='false', prix_promo=0 WHERE id=:id";
    
    $db = config::getConnexion();
 
try{    
        $req=$db->prepare($sql);
         
        
        
    
  
 $req->bindValue(':id',$id);


    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;

        }
    
  }
  function suppPromo_Produit_all(){
    $sql="UPDATE produits SET etat='false', prix_promo=0 ";
    
    $db = config::getConnexion();
 
try{    
        $req=$db->prepare($sql);
         
        
        
    
  



    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;

        }
    
  }
  function modifierPromo_Produit($id,$pour){
    $sql="UPDATE produits SET etat='true', prix_promo=prix-prix*$pour/100 WHERE id=:id";
    
    $db = config::getConnexion();
 
try{    
        $req=$db->prepare($sql);
         
        
        
    
  
 $req->bindValue(':id',$id);


    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;

        }
    
  }


  function recupererPromo($id){
    $sql="SELECT * from promo where id=$id";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  function rechercherPromo($id){
  
    $con=mysqli_connect("localhost","root","","site_web");
// Check connection

$sql="SELECT * FROM pub where id=$id";

$result=mysqli_query($con,$sql);
  
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
   
  // Free result set
 
return $rowcount;

}
	
}


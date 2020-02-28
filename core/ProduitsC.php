<?PHP
include "../config.php";
include "../entites/produit.php";
class ProduitC {
	
	function ajouter_produit($produit){
		$sql="insert into produits (type,nom,quantite,cat_id,prix,description,ingredient,gout,poids,image) values (:type,:nom,:quantite,:cat_id,:prix,:description,:ingredient,:gout,:poids,:image)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);

					        $type=$produit->gettype();
					        $nom=$produit->getnom();
					        $quantite=$produit->getquantite();
					        $cat_id=$produit->getidcat();
					        $prix=$produit->getprix();
					        $description=$produit->getdescription();
					        $ingredient=$produit->getingredient();
					        $gout=$produit->getgout();
					        $poids=$produit->getpoids();	
					        $image=$produit->getimage();

									$req->bindValue(':type',$type);
									$req->bindValue(':nom',$nom);
									$req->bindValue(':quantite',$quantite);
									$req->bindValue(':cat_id',$cat_id);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':description',$description);
									$req->bindValue(':ingredient',$ingredient);
									$req->bindValue(':gout',$gout);
									$req->bindValue(':poids',$poids);
									$req->bindValue(':image',$image);
				
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
	
	

	function afficher_produit(){
		$sql="SElECT id,nom,quantite,description,poids,gout,prix,image From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimer_produit($idd){
		$sql="DELETE FROM produits where id= :idd";
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


	function modifier_produit($produit,$id){
		$sql="UPDATE produits SET  nom=:nom,quantite=:quantite,description=:description,poids=:poids,gout=:gout,prix=:prix,image=:image WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);       					
					        $nom=$produit->getnom();
					        $quantite=$produit->getquantite();
					       $image=$produit->getimage();
					        $prix=$produit->getprix();
					        $description=$produit->getdescription();
					   
					        $gout=$produit->getgout();
					        $poids=$produit->getpoids();	
					       


		$datas = array( ':nom'=>$nom,':quantite'=>$quantite,':description'=>$description,':poids'=>$poids,':gout'=>$gout,':prix'=>$prix);
									$req->bindValue(':id',$id);									
									$req->bindValue(':nom',$nom);
									$req->bindValue(':quantite',$quantite);						
									$req->bindValue(':prix',$prix);
									$req->bindValue(':description',$description);								
									$req->bindValue(':gout',$gout);
									$req->bindValue(':poids',$poids);
									$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_produit($id){
		$sql="SELECT * from produits where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

function afficherbestProduit()
   {
       $sql="SELECT * FROM produits order by note_p desc limit 0,1 ";
       $db =config::getConnexion();
       try{
        $list=$db->query($sql);
        return $list;
       }
         catch (Exception $e)
    { die('Erreur:'.$e->getMessage());}
   }  

function rechercher_produit($mot)
   {
       $sql="SELECT * FROM produits where nom like'%".$mot."%'or id like'%".$mot."%' or type like'%".$mot."%' or gout'%".$mot."%'";
 
       $db =config::getConnexion();
       try{
        $list=$db->query($sql);
        return $list;
       }
         catch (Exception $e)
    { die('Erreur:'.$e->getMessage());}
   }



public static function afficherProd($id_categorie)
   { $db =config::getConnexion();
       $sql="SELECT * FROM produits where cat_id=:id_categorie and";
    $p=$db->prepare($sql);
    $p->bindParam(':id_categorie',$id_categorie);
       
          $p->execute();
              
                 return $p->fetchAll();
      
   } 

   public static function affichage_cat_rech($id_categorie,$mot)
   { $db =config::getConnexion();
       $sql="SELECT * FROM produits where cat_id=:id_categorie and nom like'%".$mot."%'or id like'%".$mot."%' or type like'%".$mot."%' or gout'%".$mot."%'";
    $p=$db->prepare($sql);
    $p->bindParam(':id_categorie',$id_categorie);
       
          $p->execute();
              
                 return $p->fetchAll();
      
   } 

   public static function recherche_range($min,$max)
   { $db =config::getConnexion();
       $sql="SELECT * FROM produits where prix between :min and :max";
    $p=$db->prepare($sql);
    $p->bindParam(':min',$min);
   $p->bindParam(':max',$max);
       
          $p->execute();
              
                 return $p->fetchAll();
      
   } 
      public static function afficherProd_triee($id_categorie,$num)
   { $db =config::getConnexion();
   	if($id_categorie!=0)
   {$sql="SELECT * FROM produits where cat_id=:id_categorie order by id";
      if($num==1) {$sql="SELECT * FROM produits where cat_id=:id_categorie order by nom";}
      if($num==2) {$sql="SELECT * FROM produits where cat_id=:id_categorie order by type";}
      if($num==3) {$sql="SELECT * FROM produits where cat_id=:id_categorie order by prix";}
      if($num==4) {$sql="SELECT * FROM produits where cat_id=:id_categorie order by prix desc";}
    $p=$db->prepare($sql);
    $p->bindParam(':id_categorie',$id_categorie);
       
          $p->execute();
              
                 return $p->fetchAll();
      }
      else
      {
      	$sql="SELECT * FROM produits order by id";
      if($num==1) {$sql="SELECT * FROM produits order by nom";}
      if($num==2) {$sql="SELECT * FROM produits order by type";}
      if($num==3) {$sql="SELECT * FROM produits order by prix";}
      if($num==4) {$sql="SELECT * FROM produits order by prix desc";}
    $p=$db->prepare($sql);       
          $p->execute();              
                 return $p->fetchAll();
      }
   } 


/*
    public function getstats()
    {
        $sql="
select count(produits.nom_p) as val,categorie.nom as nom_pp from produits inner join categorie on categorie.id=produits.id_categorie group by nom_pp";
        $db =config::getConnexion();
        $pst=$db->prepare($sql);
        $pst->execute();
        return $pst->fetchAll();
    }
*/


}
?>
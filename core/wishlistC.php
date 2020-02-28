<?PHP
include "../config.php";
include "../entites/produit.php";
include "../entites/wishlist.php";
class WishlistC {

function ajouter_wishlist($id,$c){
		$sql="insert into wishlist (id_produit,id_client) values (:id_produit,:id_client)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);
						$req->bindValue(':id_produit',$id);	
						$req->bindValue(':id_client',$c);			
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}


	function afficher_wishlist_products_client($iddd){
		$sql="SElECT * FROM produits as p INNER JOIN wishlist as w ON w.id_produit=p.id where w.id_client=:iddd";
		$db = config::getConnexion();

		try{
			$req->bindValue(':iddd',$iddd);	
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficher_wishlist(){
		$sql="SElECT * FROM produits as p INNER JOIN wishlist as w ON w.id_produit=p.id";
		$db = config::getConnexion();
		try{	
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
function supprimer_wishlist($idd){
		$sql="DELETE FROM wishlist where id_produit= :idd";
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






























}
	?>
<?PHP

include "C:/wamp64/www/website_GYM/core/ProduitsC.php";
$PRC=new ProduitC();


if (isset($_GET['delete'])){
	$PRC->supprimer_produit($_GET['delete']);
	header('Location: affichage_produits.php');
}

?>
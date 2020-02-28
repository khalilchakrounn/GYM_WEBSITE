<?PHP

include "../core/wishlistC.php";
$wC=new WishlistC();

	$wC->supprimer_wishlist($_GET['delete']);
	header('Location: affichage_wishlist.php');

?>
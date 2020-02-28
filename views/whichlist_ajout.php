<?PHP

include "../core/wishlistC.php";
$wC=new WishlistC();

$id=$_GET['id'];

	$wC->ajouter_wishlist($id,1);
	header("Location:produit_detail.php?id=$id");


?>
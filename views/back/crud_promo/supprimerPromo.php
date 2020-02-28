<?PHP
include "C:/wamp64/www/website_GYM/core/promoC.php";
$promoC=new promoC();
if (isset($_POST["id"])and isset($_POST["idp"]) ){
	$promoC->suppPromo_Produit($_POST["idp"]);
	$promoC->supprimerPromo($_POST["id"]);
	header('Location: ../afficher_data1.php');
}

?>
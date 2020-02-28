<?PHP
include "C:/wamp64/www/website_GYM/core/promoC.php";
$promoC=new promoC();

	$promoC->suppPromo_Produit_all();
	$promoC->supprimerPromo_all();
	header('Location: ../afficher_data1.php');


?>
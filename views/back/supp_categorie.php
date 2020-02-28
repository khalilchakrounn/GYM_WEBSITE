<?PHP

include "C:/wamp64/www/website_GYM/core/categorieC.php";
$caC=new categorieC();


if (isset($_GET['delete'])){
	$caC->supprimer_categorie($_GET['delete']);
	header('Location: affichage_categorie.php');
}

?>
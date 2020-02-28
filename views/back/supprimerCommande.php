<?PHP
include "C:/wamp64/www/website_GYM/core/commandeC.php";
include "C:/wamp64/www/website_GYM/core/factureC.php";

$factureC=new factureC();
if (isset($_POST["id"])){
	$factureC->supprimerFacture($_POST["id"]);
	
}
$commandeC=new commandeC();
if (isset($_POST["id"])){
	$commandeC->supprimerCommande($_POST["id"]);
	header('Location: afficherCommande.php?page=1&sort=2&trie=0 ?>');
}
?>
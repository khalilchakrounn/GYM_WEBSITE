<?PHP
include "C:/wamp64/www/website_GYM/config.php";
include "C:/wamp64/www/website_GYM/core/factureC.php";
$factureC=new factureC();
if (isset($_POST["id"])){
	$factureC->supprimerFactureID($_POST["id"]);
	header('Location: afficherFacture.php');
}

?>
<?PHP

include "C:/wamp64/www/website_GYM/core/pubC.php";
$pubC=new pubC();
$pa=$_GET['pa'];
$pa1=$_GET['pa1'];
$pa2=$_GET['pa2'];
if (isset($_GET["id"])){
	$pubC->supprimerPub($_GET["id"]);
header('Location: ../afficher_data.php?page='.$pa1.'&sort='.$pa.'&trie='.$pa2.'');

}
?>
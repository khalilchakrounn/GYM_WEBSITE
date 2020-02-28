<?PHP

include "C:/wamp64/www/website_GYM/core/pubC.php";
$pubC=new pubC();

	$pubC->supprimerPub_all();
header('Location: ../afficher_data.php?page=1&sort=2&trie=0');


?>
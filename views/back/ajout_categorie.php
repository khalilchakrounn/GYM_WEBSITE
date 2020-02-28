<?PHP

include "C:/wamp64/www/website_GYM/core/categorieC.php";

$catC=new categorieC();

if (isset($_POST['nom_categorie_input']) and isset($_POST['descript_categorie_input'])  )
{
	
$ca= new Categorie($_POST['nom_categorie_input'],$_POST['descript_categorie_input']);

$catC->ajouter_categorie($ca);
header('Location: affichage_categorie.php');
	
}

else{
	echo "vérifier les champs";
	}


?>
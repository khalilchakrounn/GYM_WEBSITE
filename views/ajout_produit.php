<?PHP

include "../core/ProduitsC.php";
$prC=new ProduitC();

if (isset($_POST['type_input']) and isset($_POST['produit_input']) and isset($_POST['quantite_input']) and isset($_POST['idcat_input']) and isset($_POST['prix_input'])and isset($_POST['descript_input']) and isset($_FILES['imagess_input']['name']))
{

 $name = $_FILES['imagess_input']['name'];
  $target_dir = "images/";

 move_uploaded_file($_FILES['imagess_input']['tmp_name'],$target_dir.$name);
$pr = new Produit($_POST['type_input'],$_POST['produit_input'],$_POST['quantite_input'],$_POST['idcat_input'],$_POST['prix_input'],$_POST['descript_input'],$_POST['ingred_input'],$_POST['gout'],$_POST['poids_input'], $target_dir.$name);

$prC->ajouter_produit($pr);
header('Location: affichage_produits.php');
	
}

else{
	echo "vérifier les champs";
	}


?>
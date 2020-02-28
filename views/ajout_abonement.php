<?PHP

include "../core/abonementC.php";
$abonC=new abonementC();

if (isset($_POST['abonement_input']) and isset($_POST['cour']) and isset($_POST['prix_a_input']) and isset($_POST['duree_box']) and isset($_FILES['image_input']['name']))
{
	
$name = $_FILES['image_input']['name'];
 $target_dir = "images/";
 move_uploaded_file($_FILES['image_input']['tmp_name'],$target_dir.$name);



$abon= new Abonement($_POST['abonement_input'],$_POST['duree_box'],$_POST['cour'],$target_dir.$name,$_POST['prix_a_input']);

$abonC->ajouter_abonement($abon);
header('Location: affichage_abonement.php');
}

else{
	echo "vérifier les champs";
	}


?>
<?PHP

include "../core/abonementC.php";
$abC=new abonementC();


if (isset($_GET['delete'])){
	$abC->supprimer_abonement($_GET['delete']);
	header('Location: affichage_abonement.php');
}

?>
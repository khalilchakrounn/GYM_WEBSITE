<?PHP
include "../../core/coachC.php";
$coachC=new coachC();
if (isset($_POST["id"])){
	$coachC->supprimercoach($_POST["id"]);
	header('Location: affichercoach.php');
}

?>
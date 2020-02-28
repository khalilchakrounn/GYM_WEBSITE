
<?PHP
include "../../core/coachbC.php";
$coachbC=new coachbC();
if (isset($_POST["id"])){
	$coachbC->supprimercoachb($_POST["id"]);
	header('Location: affichercoach.php');
}

?>
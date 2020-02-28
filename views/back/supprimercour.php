<?PHP
include "../../core/courC.php";
$courC=new courC();
if (isset($_POST["id"])){
	$courC->supprimercour($_POST["id"]);
	header('Location: affichercour.php');
}

?>
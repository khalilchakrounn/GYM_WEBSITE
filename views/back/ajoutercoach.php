<?PHP
include "../../entites/coach.php";
include "../../core/coachC.php";

if (isset($_POST['date']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['hor']) and isset($_POST['message']) and isset($_POST['coaches']) and isset($_POST['tel'])){
$coach1=new coach($_POST['date'],$_POST['nom'],$_POST['prenom'],$_POST['hor'],$_POST['message'] ,$_POST['coaches'],$_POST['tel']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$coach1C=new coachC();
$x=$coach1C->row_count_coach($_POST['coaches'],$_POST['hor'],$_POST['date']);

if ($x ==0){

	$coach1C->ajoutercoach($coach1);
	header('Location: affichercoach.php');
}
else{

	echo"<script language=\"javascript\">";
echo"alert('coach reserve ')";
echo"</script>";
echo"<script language=\"javascript\">";
echo"window.location.href='affichercoach.php'";
echo"</script>";



}

	
}else{
	header('Location: affichercoach.php');
}

?>
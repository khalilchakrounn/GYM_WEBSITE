<?PHP
include "../entites/coach.php";
include "../core/coachC.php";

if (!empty($_POST['date']) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['hor']) and !empty($_POST['message']) and !empty($_POST['coaches']) and !empty($_POST['tel'])){
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
	header('Location: coaches.php');
}
else{

	echo"<script language=\"javascript\">";
echo"alert('coach reserve ')";
echo"</script>";
echo"<script language=\"javascript\">";
echo"window.location.href='coaches.php'";
echo"</script>";



}

	
}else{
	header('Location: coaches.php');
}


?>
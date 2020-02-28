<?PHP
include "../../entites/coachb.php";
include "../../core/coachbC.php";

if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['specialite']) and !empty($_POST['email']) and !empty($_FILES['image']['name']) and preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $_POST['email'] ) )
{
	$name = $_FILES['image']['name'];
  $target_dir = "img_coach/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
$coachb1=new coachb($_POST['nom'],$_POST['prenom'],$_POST['specialite'],$_POST['email'],$target_dir.$name);
move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$coachb1C=new coachbC();
$coachb1C->ajouterCoachb($coachb1);
header('Location:ajoutCoach.php');
	
}
else{
	header('Location:ajoutCoach.php');
	
}


?>
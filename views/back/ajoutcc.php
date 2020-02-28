<?PHP
include "../../entites/courb.php";
include "../../core/courbC.php";

if (!empty($_POST['temp']) and !empty($_POST['nom']) and !empty($_POST['description']) )
{
$courb1=new courb($_POST['nom'],$_POST['temp'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$courb1C=new courbC();
$courb1C->ajouterCourb($courb1);
header('Location: ajoutCour.php');
	
}
else{
	header('Location: ajoutCour.php');
	
}


?>
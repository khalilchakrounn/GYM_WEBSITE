<?PHP
include "../../entites/cour.php";
include "../../core/courC.php";
$tel=strlen($_POST['tel']);
if (isset($_POST['date']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['hor']) and isset($_POST['message']) and isset($_POST['coures']) and isset($_POST['tel']) and $tel >=8 )
{
$cour1=new cour($_POST['date'],$_POST['nom'],$_POST['prenom'],$_POST['hor'],$_POST['message'] ,$_POST['coures'],$_POST['tel']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$cour1C=new courC();
$cour1C->ajouterCour($cour1);
header('Location: affichercour.php');
	
}
else{
	header('Location: affichercour.php');
	
}


?>
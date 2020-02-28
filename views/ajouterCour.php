<?PHP
include "../entites/cour.php";
include "../core/courC.php";
$tel=strlen($_POST['tel']);
if (!empty($_POST['date']) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['hor']) and !empty($_POST['message']) and !empty($_POST['coures']) and !empty($_POST['tel']) and $tel >=8 )
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
header('Location: program.php');
	
}
else{
	header('Location: program.php');
	
}


?>
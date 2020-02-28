<?php  

include "reclamations.php";

	 $recl=new reclamations();
	$msg=$recl->Enable($_POST["id"]);
	if($msg='ok')  
	{  
		echo 'Reclamation was marked as treated';  
	}  
	else 
	{
		echo 'error';
	}
 ?>
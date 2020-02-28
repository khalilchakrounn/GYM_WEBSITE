<?php  
	
include "reclamations.php";
	 $recl=new reclamations();
	$msg=$recl->Disable($_POST["id"]);
	if($msg='ok')  
	{  
		echo 'Reclamation was marked as not treated';  
	}  
	else 
	{
		echo 'error';
	}
 ?>
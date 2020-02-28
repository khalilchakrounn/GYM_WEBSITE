<?php  

include "Clients.php";
         $client=new Clients();
	$msg= $client->SuppClient($_POST["id"]);

	if($msg='ok')  
	{  
		echo 'Data Deleted';  
	}  
	else 
	{
		echo 'Data cannot be deleted';
	}
 ?>
<?php  

include "Clients.php";

	 $client=new clients();
	$msg=$client->Disable($_POST["id"]);
	if($msg='ok')  
	{  
		echo 'Client blocked';  
	}  
	else 
	{
		echo 'Client cannot be blocked';
	}
 ?>


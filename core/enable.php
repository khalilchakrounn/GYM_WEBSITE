
<?php  

include "Clients.php";

	 $client=new clients();
	$msg=$client->Enable($_POST["id"]);
	if($msg='ok')  
	{  
		echo 'Client actived';  
	}  
	else 
	{
		echo 'Client cannot be actived';
	}
 ?>




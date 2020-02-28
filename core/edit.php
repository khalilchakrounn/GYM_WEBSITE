<?php  
include "Clients.php";
         $client=new Clients();
$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"]; 
$resultat=$client->modifierClient2($column_name,$text,$id);
	if($resultat=='ok')  
	{  
		echo 'Data Updated';  
		
	}  
 ?>
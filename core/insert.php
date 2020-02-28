<?php  
include "Clients.php";
 $client=new Clients();
	$msg=$client->ajouterClient2($_POST["first_name"],$_POST["last_name"],$_POST["Email"],$_POST["adresse"],$_POST["mobile"]);
if($msg="ok")  
{  
     echo 'Data Inserted';   
}  
else {echo 'please try later' ;}
 ?>


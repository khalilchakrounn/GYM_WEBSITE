<?php
include "../entites/client.php";
include "../Core/Clients.php";

if((!empty($_POST['password']) && (!empty($_POST['pass2'] ))
{  $pass=$_POST['password'];
  $pass1=$_POST['pass2'];
  if($pass==$pass1)
{
 

    $password = $_POST['password'];
 
    if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $password)) {
         $status = 'Success';
  $message = 'mot de passe fort';
  }
  
    else {
         $status = 'Success';
  $message = 'mot de passe facile';
  } 

  
}
else { $status = 'error';
  $message = 'mot de passe non identique';}
}
else { $status = 'error';
  $message = 'mot de passe vide';}
}




$data = array('status'=>$status, 'message'=>$message);

echo json_encode($data);

?>
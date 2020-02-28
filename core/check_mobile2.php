<?php
include "../entites/client.php";
include "../Core/Clients.php";

if(!empty($_POST['mobile']))
{

  $regex = "/^\d{8}$/";
if (preg_match($regex, $_POST['mobile']))
{
  extract($_POST);
  $mobile = strip_tags($mobile);
  

  try{
 $db = configa::getConnexion();
  $db->exec('SET NAMES utf8');
  }
  
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
  $id='32';
  $req = $db->prepare('SELECT ID_CLIENT FROM client WHERE (mobile=:mobile and ID_CLIENT!=:id)');
  $req->execute(array(':mobile'=>$mobile, ':id'=>$id));
  
  if($req->rowCount()>0)
  {
    $status = 'error';
    $message = 'mobile number  has already been used';
  }
  else
  {
    $status = 'success';
    $message = 'mobile number available';
  }
  
}
else 
{ $status = 'error';
  $message = 'mobile number  invalid';}}
else
{
  $status = 'error';
  $message = 'mobile number  invalid';
}

$data = array('status'=>$status, 'message'=>$message);

echo json_encode($data);

?>
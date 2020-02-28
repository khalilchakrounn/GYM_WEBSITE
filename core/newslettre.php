<?php
include "C:/wamp64/www/website_GYM/config.php";



if(!empty($_POST['email']))
{

  $email =$_POST['email'];
  try{
 $db = config::getConnexion();
  $db->exec('SET NAMES utf8');
  }
  
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
$req = $db->prepare('SELECT email  FROM newsletter WHERE email=:email' );
  $req->execute(array(':email'=>$email));
  if($req->rowCount()==0)
  {
$sql="insert into newsletter (email) values (:EMAIL)" ;
  $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
       $req->bindValue(':EMAIL',$email);
             $req->execute();

  }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

  echo '<script language="javascript"> alert(" vous etes maintenant abonné a notre newsletter , merci "); ;</script>';
    $message = 'vous etes deja abonné';
    ?>
    <script type=""> location.replace("../views/index.php");</script>
    <?php

 }
 else { $status = 'error';
  echo '<script language="javascript"> alert(" vous etes deja abonné "); ;</script>';
    $message = 'vous etes deja abonné';
    ?>
    <script type=""> location.replace("../views/index.php");</script>
    <?php
     }
}

else
{

  echo '<script language="javascript"> alert(" vous etes maintenant abonné a notre newsletter , merci "); ;</script>';
    $message = 'vous';
    ?>
    <script type=""> location.replace("../views/index.php");</script>
    <?php
}




//echo json_encode($data);



?>
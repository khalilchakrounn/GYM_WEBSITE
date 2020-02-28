<?php
include "../entites/client.php";
include "../Core/Clients.php";



  $pseudo =$_POST['email'];

  $pass = $_POST['pass'];





if(!empty($_POST['email']) && !empty($_POST['pass']))
{

  try{
 $db = config::getConnexion();
  $db->exec('SET NAMES utf8');
  }
  
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
$req = $db->prepare('SELECT ID_CLIENT  FROM client WHERE ((USERNAME=:pseudo  || EMAIL=:pseudo ) && role="admin")');
  $req->execute(array(':pseudo'=>$pseudo));
  if($req->rowCount()>0)
  {
      $req = $db->prepare('SELECT ID_CLIENT   FROM client WHERE ((USERNAME=:pseudo && PASSWORD=:pass)) || (EMAIL=:pseudo && PASSWORD=:pass)');
  $req->execute(array(':pseudo'=>$pseudo ,':pass'=>$pass));
 
if($req->rowCount()>0){
  	echo '<script language="javascript"> alert("welcome to your dashboard '.$pseudo.'"); ;</script>';
      session_start();
    $_SESSION['l']= $pseudo;
    $_SESSION['p']=$pass;
                   $client=new Clients();
$info=$client->afficheradmin($_SESSION['l'],$_SESSION['p']);

foreach($info as $row){
   $_SESSION['ID']=$row['ID_CLIENT '];
}
  	 ?>

    <script type=""> location.replace("../views/back/table_Client.php");</script>
    <?php
    $status = 'success';
    $message = 'welcome';
}


  

  else {  $status = 'error';
  echo '<script language="javascript"> alert("wrong PASSWORD for '.$pseudo.' account "); ;</script>';
    $message = 'verifier votre mdp';
    ?>
    <script type=""> location.replace("../views/back/login.php");</script>
    <?php
} 
 }
 else { $status = 'error';
  echo '<script language="javascript"> alert("'.$pseudo.' Is not an admin"); ;</script>';
    $message = 'compte introuvable';
    ?>
    <script type=""> location.replace("../views/back/login.php");</script>
    <?php
     }
}

else
{
  $status = 'error';
  $message = 'veuillez saisir votre username and mdp';
}




//echo json_encode($data);



?>
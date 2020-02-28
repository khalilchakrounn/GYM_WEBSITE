

<?php
include "../entites/client.php";
include "../Core/Clients.php";

  $pseudo =$_POST['email'];





if(!empty($_POST['email']))
{

  try{
 $db = config::getConnexion();
  $db->exec('SET NAMES utf8');
  }
  
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
$req = $db->prepare('SELECT ID_CLIENT  FROM client WHERE ((USERNAME=:pseudo  || EMAIL=:pseudo )&& role="user")');
  $req->execute(array(':pseudo'=>$pseudo));
  if($req->rowCount()>0)
  {
    

 $client=new Clients();
       $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789';
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);


    $password=hash('sha512', $token);
$msg=$client->change($_POST['email'],$password);
  if($msg='ok')  
  {


require_once "phpmailer/class.phpmailer.php";

$message = "
<h2>RESET PASSWORD</h2>
<p>Hi ".$_POST['email'].",</p>
      <p> here is your new password </p> 
      <h1> ".$token." </h1>
<p>To better secure your account please change this password later  </p>
    
      <p>Best Regards,<br />BF Academy</p>
  ";





$mail = new PHPMailer(true);


$mail->IsSMTP();


$mail->SMTPDebug = 0;


$mail->SMTPAuth = true;


$mail->SMTPSecure = 'tls';


$mail->Host = 'smtp.gmail.com';


$mail->Port = 587;


$mail->Username = 'bfacademy29@gmail.com';


$mail->Password = 'sitewebgym';


$mail->SetFrom('BFACADEMY@gmail.com', 'BFACADEMY');


$mail->AddAddress($_POST['email']);
$mail->Subject = 'RESET PASSWORD';

//
$mail->MsgHTML($message);


try {
    // send mail
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}




          ?>
      <script language="javascript">
         alert('check your email');
location.replace("../views/login.php");

</script>
<?PHP 
  }  
  else 
  {
    echo 'error';
  }




 }
 else { $status = 'error';
  echo '<script language="javascript"> alert("'.$pseudo.' Is not a membre "); ;</script>';
    $message = 'compte introuvable';
    ?>
    <script type=""> location.replace("../views/login.php");</script>
    <?php
     }
}

else
{
  $status = 'error';
  $message = 'veuillez saisir votre username ';
}




//echo json_encode($data);



?>















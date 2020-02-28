<?php




if(isset($_POST["send"]))
{
	    require_once "phpmailer/class.phpmailer.php";   
	$message = $_POST["message"];	
$mail = new PHPMailer(true);


$mail->IsSMTP();


$mail->SMTPDebug = 0;


$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';


$mail->Host = 'smtp.gmail.com';


$mail->Port = 587;


$mail->Username = 'anes.temani@esprit.tn';


$mail->Password = 'anes1996';


$mail->SetFrom('anes.temani@esprit.tn', 'anes');


$mail->AddAddress($_POST['email']);

//
$mail->MsgHTML($message);


try {
   if($mail->Send())
    ?>
<script type="text/javascript">
	alert("Mail send successfully")
</script>
 
    <?php
} catch (phpmailerException $e) {

    $msg = $e->getMessage();
      ?>
echo <script type="text/javascript">
	alert("Mail not send ")
</script>
 
    <?php
} catch (Exception $e) {
    $msg = $e->getMessage();
}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>SEND MAIL</title>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container" style="width:100%; max-width:600px">
			
			<br />
			<div class="panel panel-default">
				<div class="panel-heading"><h4>SEND MAIL</h4></div>
				<div class="panel-body">
					<form method="post" id="register_form">
				
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" name="email" class="form-control"  required />
						</div>
						<div >
							<label>MESSAGE</label>
							<input type="TEXTAREA" name="message" class="form-control" required />
						</div>
						<br>
						<br>
						<div class="form-group">
							<input type="submit" name="send" id="send" onClick="mensaje3()" value="Send" class="btn btn-info" />
						</div>
					</form>
					
				</div>
			</div>
		</div>

  

</script>
	</body>

</html>
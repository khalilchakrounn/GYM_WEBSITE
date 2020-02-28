<?php  
require 'php-mailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'abdelhamid.jazi@esprit.tn';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('abdelhamid.jazi@esprit.tn', 'abdelhamid jazi');
$mail->addAddress('abdelhamid.jazi@esprit.tn', 'abdelhamid jazi');     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject =$_POST["subject"];
$mail->Body ="<html>
<h4>".$_POST["cont"]
."
</h4>
</html>
";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
    echo 'Message has been sent';
     header('Location: coaches.php');
}
?>
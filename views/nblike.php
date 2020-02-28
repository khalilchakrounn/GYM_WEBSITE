<?php 
session_start();
include "C:/wamp64/www/website_GYM/core/pubC.php";
 $id=$_POST['id'];
 $client=$_SESSION['l'];

if (isset($_POST['done'])) {
$pub1C=new pubC();

$rowcount=$pub1C->selectPub_liked($client,$id);
if ($rowcount ==0) {

$pub1C->ajouterPub_liked($client,$id);
$pub1C->update_like($id); 
header('Location: index.php');
}
else
{
echo"<script language=\"javascript\">";
echo"alert('vous avez deja aimer cette pub ')";
echo"</script>";
echo"<script language=\"javascript\">";
echo"window.location.href='index.php'";
echo"</script>";
}

}

 ?>
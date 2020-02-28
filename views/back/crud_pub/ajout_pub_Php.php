  <?php

include "C:/wamp64/www/website_GYM/entites/pub.php";
include "C:/wamp64/www/website_GYM/core/pubC.php";
if(isset($_POST['but_upload']) and isset($_POST['nom']) and isset($_POST['pos'])) 
{
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif","mp4");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
$pub1=new pub($_POST['nom'],$_POST['pos'],$target_dir.$name);
$pub1C=new pubC();
$pub1C->ajouterPub($pub1);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
//header('Location: index.php');
  }
 }
header('Location: ajouter_pub.php');
?>
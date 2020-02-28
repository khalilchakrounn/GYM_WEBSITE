<?PHP
include "../entites/reclamation.php";
include "reclamations.php";
session_start ();
if( !empty($_POST['choix']) && !empty($_POST['reviews'])  )
{

  
$recl=new reclamation( $_SESSION['l'],$_POST['choix'],$_SESSION['ID'],$_POST['reviews']);
$reclamation=new reclamations();
$reclamation->ajouterReclamaion($recl);
echo '<script language="javascript"> alert("Votre reclamation est envoyé '.$_SESSION['l'].'"); ;</script>';
  	 ?>
    <script type=""> location.replace("../views/reclamation.php");</script>
    <?php
    
   
}





?>
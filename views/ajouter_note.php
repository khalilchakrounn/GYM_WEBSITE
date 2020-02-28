<?PHP

include "../core/ProduitsC.php";
$pC=new ProduitC();
session_start();
$id=$_GET['id'];
$note=$_GET['note'];
if(isset($_SESSION['ID']))     
	          {
$idc=$_SESSION['ID'];
	$pC->ajouternote($id,$note,$idc);
	
      $db = config::getConnexion();
        $sql="UPDATE produits set note=(SELECT AVG(notee) from note where id_produit='$id') where id='$id'";
         $req=$db->prepare($sql);  
$req->execute();


      header("Location:produit_detail.php?id=$id");
}else{header("Location:login.php");}

?>
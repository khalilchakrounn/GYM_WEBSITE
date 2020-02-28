<!DOCTYPE html>
<html>
<head>

   <script src="js/bootbox.all.js"></script>
      <script src="js/bootbox.all.min"></script>
         <script src="js/bootbox"></script>
            <script src="js/bootbox.locales"></script>
               <script src="js/bootbox.locales.min"></script>
                  <script src="js/bootbox.min"></script>
                  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
              </head>
<?php
require '_header.php';

$json = array('error' => true);
if(isset($_GET['id'])){
	$produit=$DB->query('SELECT id FROM produits WHERE id=:id' , array('id' => $_GET['id']));
	if(empty($produit)){
		$json['message'] = "ce produit n'existe pas";
	}
	
	$panier->ajouter($produit[0]->id);
	$json['error'] = false;
	$json['total'] = $panier->total();
	$json['count'] = $panier->count();
	$json['message']= 'le produit a ete bien ajoute a votre panier ';

	?>
	
<script >


 if(confirm('le produit a ete bien ajoute a votre panier  Voulez vous consulter votre panier '))
		 {
 				location.href = 'panier.php' ;
		 }
		 else {location.href = 'produits.php' ;}



	</script>
<?php

}
echo json_encode($json);
?>


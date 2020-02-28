<?PHP
include "../core/crudsC.php";
$catC=new categorieC();
$listecategorie=$catC->afficher_categorie();
$prC=new ProduitC();
$listeproduit=$prC->afficher_produit();

?>

   <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">


<table class="lattest-product-area pb-40 category-list" id="example" width="">
										<tbody>
											<?php
                                            foreach($listeproduit as $row){ 
                                            ?>		
						<tr>
					<div class="row">

						<!-- single product -->	
								
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
											
								<!--img class="img-fluid" src="images/product/p5.jpg" -->
								<div class="product-details">
									<h6><?PHP echo $row['nom']; ?></h6>
									<div class="price">
										<h6><?PHP echo $row['prix']; ?></h6>
										<h5><?PHP echo $row['gout']; ?></h5>
										<h5><?PHP echo $row['poids']; ?></h5>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">panier</p>
										</a>
										<!--a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a-->
									
									</div>
								</div>
							</div>
						</div>
					
					</div>	
					</tr>
						<?php
					}
					?>
					</tbody>
				</table>


				<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>


<?php 
session_start();
 
 ?>
<?php  
require '_header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Muscle - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/linearicons2.css">
    <link rel="stylesheet" href="css/themify-icons2.css">

	<link rel="stylesheet" href="css/cart.css"/>



    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */

button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
  height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
  padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>

</head>
<body>
  <?php
   include'head2.php';
?>


<section class="hero-wrap js-fullheight" style="background-image:  url('images/image_2.jpg'); height: 1000px; width: 1382px;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="produits.php">Home</a></span> <span>Products</span></p>
          </div>
        </div>
      </div>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Votre panier</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Votre panier</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- cart section end -->
	<section class="cart-section spad">
  
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Votre panier</h3>
						<div class="cart-table-warp">
              
							<table>
                <form method="POST" action="panier.php">
							<thead>
								<tr>
									<th class="product-th">Produit</th>
									<th class="quy-th">Quantité</th>
									<th class="total-th">Prix</th>
                  <th class="total-th">Actions</th>
								</tr>
							</thead>
							<tbody>
              <?php
              $ids = array_keys($_SESSION['panier']);
              if(empty($ids)){
                $produits = array();

              }else{
                $produits = $DB->query('SELECT * FROM produits WHERE id IN ('.implode(',', $ids).')');
              }

               

               foreach($produits as $produit):
              ?>

								<tr>
									<td class="product-col">
										<img src="<?php echo $produit->image; ?>" alt="">
										<div class="pc-title">
											<h4><?= $produit->nom; ?></h4>
											<p> <?= number_format($produit->prix,3,',',' '); ?>DT</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					            <div class="pro-qty">
												<input type="text" name="panier[quantite][<?= $produit->id; ?>]" value="<?= $_SESSION['panier'][$produit->id]; ?>" >
											</div>
                    </div>
									</td>
									<?php
                         if($produit->etat=='false'){?>
                          <td class="total-col"><h4><?= number_format($produit->prix,3,',',' '); ?> DT</h4></td>
                  <?php       }else{
                  ?>
									<td class="total-col"><h4><?= number_format($produit->prix_promo,3,',',' '); ?> DT</h4></td>

                  <?php } ?>
                  <td class="size-col"><a class="zmdi zmdi-delete" href="panier.php?delPanier=<?= $produit->id; ?> ">supprimer 
                </a>
                    
                   </td>
								</tr>
           
								
								<?php endforeach; ?>
                <input type="submit" value="Recalculer">
							</tbody>
              </form>
						</table>
						</div>
						<div class="total-cost">

              <h6>produits<span id="count"><?= $panier->count(); ?></span></h6>

							<h6>Total <span id="total"><?= number_format($panier->total(),2,',',' ');?>DT</span></h6>
               
						</div>
					</div>
				</div>

				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form>




              <?php
              $ids = array_keys($_SESSION['panier']);
              if(empty($ids)){
                ?>
                <a href="panier.php" class="site-btn sb-dark" onclick="panier_vide()">finaliser votre commande </a>
             

        <?php      }else{
                          if($panier->count() == 0){  ?>

                            <a href="panier.php" class="site-btn sb-dark" onclick="qte_nulle()">finaliser votre commande</a>
                        <?php  }else{
if(isset( $_SESSION['l']))
  {
?>
 <a href="commande_form_adresse.php" class="site-btn sb-dark" >finaliser votre commande</a>
<?php
}



else {
                        ?>
    
<span onclick="document.getElementById('modal-wrapper').style.display='block'" class="site-btn sb-dark">
finaliser votre commande </span>
            
          <?php    } }

        }   ?>
              
					<a href="produits.php" class="site-btn">poursuivre vos achats</a>
					


				</div>
			</div>
		</div>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate"  method="POST" action="../core/check_acc3.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>

      <h1 style="text-align:center">LOGIN</h1>
    </div>

    <div class="container">
      <input type="text" name="email" id="mail" placeholder="Email address or user name" >
      <input type="password" name="pass" id="pass" placeholder="Enter Password" >        
      <button type="submit" style="background-color: #ff3399;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
  font-size:20px;">Login</button>
        
      <a href="MDP oublie.php" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

	</section>
	<!-- cart section end -->





<footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Boost Your Body</a></li>
                <li><a href="#" class="py-2 d-block">Achieve Your Goal</a></li>
                <li><a href="#" class="py-2 d-block">Analyze Your Goal</a></li>
                <li><a href="#" class="py-2 d-block">Improve Your Performance</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
		
  <script type="text/javascript" src="controle_panier.js"> </script>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
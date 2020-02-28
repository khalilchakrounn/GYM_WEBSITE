
          <?php 
          session_start();
 include'header.php' 
 ?>
        
<?php require '_header.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>cmd_adr</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/util_form.css">
	<link rel="stylesheet" type="text/css" href="css/main_form.css">
<!--===============================================================================================-->
 
  <link rel="stylesheet" href="css/cart.css"/>

</head>
<body >



              <?php 
              $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "site_web";
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    $query = "SELECT * FROM commande ";
    $result1 = mysqli_query($connect, $query);
    $rowcount=mysqli_num_rows($result1);
    
        if ($rowcount==0){
          $id=1;
        }else {
          $id=$rowcount+1;
        }
              
                      

              ?>

    <!-- END nav -->
      <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
          </div>
        </div>
      </div>
      <div class="container-login100" >
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30"  style=" right: 10% ;width: 700px">

				<form id="form" class="login100-form validate-form" method="POST" enctype="multipart/form-data" action="ajouterCommande.php" >
				  <?PHP
        
            $client=new Clients();
$info=$client->afficherClient($_SESSION['l'],$_SESSION['p']);

foreach($info as $row){

  ?> 
        	<span class="login100-form-title p-b-55">
            Adresse
					</span>

<input type="number" name="id" value="<?= $id ?>" hidden >
				<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Nom et prénom</span>
						<input  class="input100" type="text"  placeholder="foulen benfoulen" value="<?PHP echo $row['Firstname']." ".$row['Lastname']; ?>" disabled>
             <input type="hidden" name="nom_prenom" value="<?PHP echo $row['Firstname']." ".$row['Lastname']; ?>">
						<span class="focus-input100"></span>
					</div>
 <?PHP
 }

  ?>   
					<div class="wrap-input100 validate-input" data-validate = "Valid number">
						<span class="label-input100">Numéro de téléphone mobile</span>
						<input id="tel" class="input100" type="number" name="numero" placeholder="00 000 000" value="<?PHP echo $row['mobile']; ?>">
						<span class="focus-input100"></span>
					</div>
         

<?php
              $ids = array_keys($_SESSION['panier']);
              if(empty($ids)){
                $produits = array();
              }else{
                $produits = $DB->query('SELECT * FROM produits WHERE id IN ('.implode(',', $ids).')');
              }
              ?>
               <?php  foreach($produits as $produit):
              ?>
<input type="hidden" name="nom_prod" value="<?= $produit->nom; ?>">
<input type="hidden" name="qte" value="<?= $_SESSION['panier'][$produit->id]; ?>" >
<?php
                         if($produit->etat=='false'){ ?>
                        <input type="hidden" name="prix"  value="<?= $produit->prix; ?>">
                        <input type="hidden" name="total"  value="<?= $produit->prix + 6; ?>">
 <?php
                        }else{?>
                   <input type="hidden" name="prix"  value="<?= $produit->prix_promo; ?>">
                   <input type="hidden" name="total"  value="<?= $produit->prix_promo + 6; ?>">
               <?php } ?>


 <?php endforeach; ?>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Adresse</span>
						<input id="add" class="input100" type="text" name="adresse" placeholder="Rue/Appartement/Suite/Bloc/Bâtiment" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Région</span>
						<input id="reg" class="input100" type="text" name="region" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Ville</span>
						<input id="ville" class="input100" type="text" name="ville" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							
					</div>
				</div>


          <span class="login100-form-title p-b-55">
            Mode de livraison
          </span>

        <div class="wrap-input100 validate-input" data-validate="Cochez une option ">
         <span class="label-input100">Comment voulez-vous que votre commande soit livrée ?</span><br>
            <input class="input-checkbox100" type="radio" name="r1" id="id1" value="livraison standard">
            <label class="label-checkbox100" for="id1">livraison standard</label><br>
            <input class="input-checkbox100" type="radio" name="r1" id="id2" value="retrait à la salle">
            <label class="label-checkbox100" for="id2">retrait à la salle</label><br>

         
          </div>

        
         
         
            <span class="focus-input100"></span>
          <div class="flex-m w-full p-b-33">
            <div class="contact100-form-checkbox">
              
          </div>
        </div>

        <span class="login100-form-title p-b-55">
            Mode de Paiement
          </span>

        <div class="wrap-input100 validate-input" data-validate="Cochez une option ">
            <span class="label-input100">Comment voulez-vous que votre commande soit payée ?</span><br>
            <input class="input-checkbox100" type="radio" name="r2" id="id3" value="Paiement à la livraison" checked >
            <label class="label-checkbox100" for="id3">Paiement à la livraison</label><br>


          </div>


          <div class="cart-table">
            <h4>Détails de la commande</h4><br>
          <div class="cart-table-warp">
            <table>
              
              <tr>
            <td>
              nombre de produits
            </td>
            <td>
              <h4><?= $panier->count(); ?></h4>
            </td>
            </tr>
            <tr>
           <td>
                  Sous-total
          </td>

           <td >
                   <h4><?php
                         if($produit->etat=='false'){?>
                          <?= number_format($produit->prix,3,',',' '); ?> DT
                  <?php       }else{
                  ?>
                  <?= number_format($produit->prix_promo,3,',',' '); ?> DT

                  <?php } ?></h4>
           </td>
            </tr>
            <tr>
           <td>
             Montant de livraison
           </td>
            <td >
                   <h4>6Dt</h4>
           </td>
                  
</tr>           
             
            </table>
            </div>
            <div class="total-cost">
              <h6>Total <span><?php
                         if($produit->etat=='false'){?>
                          <?= number_format($produit->prix+6,3,',',' '); ?> DT
                  <?php       }else{
                  ?>
                  <?= number_format($produit->prix_promo+6,3,',',' '); ?> DT

                  <?php } ?></span></h6>
            </div>

</div>
          <div class="flex-m w-full p-b-33">
            <div class="contact100-form-checkbox">
              
          </div>
        </div>
					
				<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							
             
            </div>
						</div>
 <form action="mes_cmd.php"  enctype="multipart/form-data">

                                                      
                                                           
                                                       
                                                        
						<button class="login100-form-btn" id="login"> <input type="hidden" value="<?PHP echo $row['Firstname']; ?>" name="Firstname">
                confirmer
              </button></form>
						</div>
					</div>
				</form>
				<br>
					<br>
					
			</div>
		</div>
	</div>
</section>

  <!-- cart section end -->
  <section class="cart-section spad" style="position: absolute; top: 10% ;left: 900px ;width: 500px">
    
        <div class="col-lg-8">
          <div class="cart-table">
            <h3>Votre commande</h3>
            <div class="cart-table-warp">
              <table>
              <thead>
                <tr>
                  <th class="product-th">Produits</th>
                
                </tr>
              </thead>
              <tbody>
               <?php  foreach($produits as $produit):
              ?>
                <tr>
                  <td class="product-col">
                   <img src="<?php echo $produit->image; ?>" alt="">
                    <div class="pc-title">
                      <h4><?= $produit->nom; ?></h4>
                      <p><?php
                         if($produit->etat=='false'){
                         echo number_format($produit->prix,3,',',' ').' DT';
                        }else{
                  
                 echo number_format($produit->prix_promo,3,',',' ').' DT'; } ?></p>
                      <p><?= $_SESSION['panier'][$produit->id]; ?></p>
                    </div>
                </tr>
                
               
              </tbody>
              <?php endforeach; ?>
            </table>
            </div>
            <div class="total-cost">
               <h6>produits<span id="count"><?= $panier->count(); ?></span></h6>
              <h6>Total <span><?php
                         if($produit->etat=='false'){?>
                          <?= number_format($produit->prix,3,',',' '); ?> DT
                  <?php       }else{
                  ?>
                  <?= number_format($produit->prix_promo,3,',',' '); ?> DT

                  <?php } ?></span></h6>
            </div>
          </div>
        </div>
	
    </section>

   
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
		
	
<script >
	  var formValid = document.getElementById('login');

 formValid.addEventListener('click', controle);
function controle(event)
{
	

	 var tel = document.getElementById('tel');
	 var add = document.getElementById('add');
 var reg = document.getElementById('reg');
 var ville = document.getElementById('ville');
 var r1 = document.getElementById('r1');

 
if(add.value.length==0)
{ event.preventDefault();}


if (reg.value.length == 0)
{ event.preventDefault();}


if(ville.value.length == 0)
{ event.preventDefault();}


if(r1.value.length == 0)
{ event.preventDefault();}


if (tel.value.length !=8)
{ event.preventDefault();}



 }

 
</script>

</body>
</html>
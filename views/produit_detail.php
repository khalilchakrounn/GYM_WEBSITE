<?PHP

include "../core/crudsC.php";

$id=$_GET['id'];

$catC=new categorieC();
$listecategorie=$catC->afficher_categorie();
$prC=new ProduitC();
$listeproduit=$prC->recuperer_produit($id);


?>

<head>
    <title>Academie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

  </head>
  <body  id="produits">
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	     <a  href="index.html"><img style="position: absolute;  right: 85% ; top:0px" src="images\logo.png" > </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav" style="background-image: url('');position:  right: 12%">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="program.html" class="nav-link">Program</a></li>
	          <li class="nav-item"><a href="coaches.html" class="nav-link">Coaches</a></li>
	   		  <li class="nav-item "><a href="abonements.php" class="nav-link">Abonements</a></li>
	          <li class="nav-item active"><a href="produits.php" class="nav-link">Produits</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Journal</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	           
          </ul>
            <li style="list-style-type:none;" class="main-nav-list"><a href="panier.html" class="nav-link"><img  src="images\icons\panier1.png" style="width:40px"></li>
            <li style="list-style-type:none;" class="main-nav-list"> <a data-toggle="collapse" href="#Cat2"  > <img style="position: absolute; top: 5px; right: 7%" id="myImage" src="images\acc.png" style="width:30px"></a>
              <ul class="collapse" id="Cat2" data-toggle="collapse" > 
                <li ><a href="#"  > <span FONT face="Times New Roman">ACCOUNT </span></a></li>
                 <li ><a href="affichage_wishlist.php"  > <span FONT face="Times New Roman">WISHLIST </span></a></li>
                <li ><a  href="login.html"><span FONT face="Times New Roman">LOGIN </span></a> <span> / </span> <a href='index.html'  onclick="document.getElementById('myImage').src='images\acc.png'"> <span FONT face="Times New Roman">LOGOUT </span> </a> </li>
               
              </ul>
            </li>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
      <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">DETAILS</h1>
          </div>
        </div>
      </div>
    </section>

    
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<br>
				<br>
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
											<?php
                                            foreach($listecategorie as $row){ 
                                            ?>
						<li class="main-nav-list">
							<a  href="cat_front.php?cat=<?php echo $row['id'];?>" ><span class="lnr lnr-arrow-right"></span><?PHP echo $row['nom']; ?></a>			
						</li>
											<?PHP
                                             }
                                             ?>						
					</ul>
				</div>

			</div>
		

			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
					<br> 
				<table class="lattest-product-area pb-40 category-list" id="example" width="">
										<tbody>
											<?php
                                            foreach($listeproduit as $row){ 
                                            ?>		
						<tr>
							<td><img class="img-fluid" src='<?php echo $row['image']; ?>' width="400" height="600" ></td>
							<td>
						
							<div class="single-product">																		
								<div class="product-details">
									<div class="name"><?PHP echo $row['nom']; ?></div>
									<br>
									<div class="price">
										<h6>prix: <?PHP echo $row['prix']."dt"; ?></h6>
										<br>
										<h5><?PHP echo $row['description']; ?></h5>
										<br>
										<h5><?PHP if ($row['gout']!=""){ echo "Gout :".$row['gout'];} ?></h5>
										<br>
										<h5><?PHP if ($row['ingredient']!=""){ echo "Ingredient :".$row['ingredient'];} ?></h5>
										<br>
										<h5><?PHP if ($row['poids']!=""){ echo "Poids :".$row['poids'].".Kg";} ?></h5>
										<h5 style="color: red;"><?PHP if ($row['quantite']!=""){ echo "in stock";} 
										else{echo "out of stock";}


										?>										
										</h5>
									</div>
								</div>
							</div>
							</td>
							<td width="20%"></td>
					<td>
							<td width="9%">								
											<a href="" class="social-info">
											<img class="img-fluid" src="images/pan.png" >											
											</a>
								<td width="9%">			
										<a href="whichlist_ajout.php?id=<?php echo"$id"?>" class="social-info">
													<img class="img-fluid" src="images/wish.png" >	
												</a>
									<td width="9%">
										<a href="supp_wishlist.php?delete=<?php echo $row['id'];?>">
                                            <img class="img-fluid" src="images/del.png" > </a>
                                   </td> 
                                  </td> 
                            </td>                  
					</td>
																												
					</tr>						
					
														<?php
														}
														?>
					</tbody>
				</table>
		</div>
	</div>
</div>






  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
 
  <script src="js/mainn.js"></script>
<script type="text/javascript">
	document.getElementById("sor").addEventListener('change', function () {
    window.location = this.value;
}, false);
</script>
<script>
	
    $('#search').keyup(function(){
    	var val = $(this).val().toLowerCase();
 $(".name").hide();
  $(".name").each(function(){
  	var text=$(this).val().toLowerCase();
  	if(text.indexOf(val)!=-1)
  		{$(this).show();}

  });
    				});

</script>

  </body>
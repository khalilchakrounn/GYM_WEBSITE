<?php
session_start();
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
    <link rel="stylesheet" href="bluetable.css">
  </head>
  <body>
  	<?php
     include "header.php"
  	?>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Class Schedule</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Schedule</span></p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="sched-list">
	    				<table class="blueTable">
		<?PHP				    
include "../core/courbC.php";
$courb1C=new courbC();
$listecours=$courb1C->affichercourb();
?>                          
                   <thead>
<tr>
<th>Lundi</th>
<th>Mardi</th>
<th>Mercredie</th>
<th>Jeudi</th>
<th>Vendredie</th>
<th>Samedi</th>
<th>Dimanche</th>
</tr>
				</thead>
						    <tbody>
						    	<?PHP $i=0;
						foreach($listecours as $row1){
								
						     $i++;
						     if(($i%8)==0)
						     {
						     	
						     	?>
						     	<tr>

						     		
						     	</tr>
							<?php
						     }else{
						     ?>						
   							
						     
							<td>	
									<?php echo $row1['cour'];?>
						        	<?php echo $row1['descrip'];?>
						        	<?php echo $row1['temps'];?>
						    </td>
<?php 
}}
?>
						     
						    </tbody>
						   
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

<?php 
include "footer.php"
?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="js/main.js"></script>
    
  </body>
</html>
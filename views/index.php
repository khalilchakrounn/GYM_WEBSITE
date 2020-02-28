<?php
session_start ();
include "pub_front.php";
?>
<!DOCTYPE html>
<html>
<head>
        <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script src="validerchampcour.js"></script>
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
      <link rel="stylesheet" href="bluetablee.css">
         <link rel="stylesheet" href="myButton.css">
             <link rel="stylesheet" href="mybuttonn.css">
  
  <link type="text/css" rel="stylesheet" href="css/bootstrap_acc.min.css" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css" />
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider_acc.min.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style_acc.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!---------------------------------------------------------------------------->

    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
     <style type="text/css">
    #pop{ 
       
        height: 200px;
     width: 900px;
        bottom: 40%;
     right: 15%;
     

position: absolute;


    }

  #skip253{
     height: 200px;
     width: 900px;
     
  }
  #pop2{
          height: 200px;
     width: 900px;
        bottom: -275%;
     right: 18%;
     position: absolute;
  }

  #butt{
        height: 30px;
     width: 80px;
        bottom: 83%;
     right: 45.2%;
     position: absolute;
  }
    #butt1{
        height: 30px;
     width: 80px;
        bottom: 83%;
     right: 45%;
     position: absolute;
  }
    #pop3{
          height: 200px;
     width: 900px;
       bottom: 50%; 
     right: 18%;
     position: absolute;
  }
  #toR{
right: 18%;

  }
  </style>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 900px;
height: 500px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}

</style>


    <title></title>
</head>
<body>

<div id="imm" class='popup'>

<div class='cnt223'>
	<a id="count" disabled></a>
<a href='' class='close'>Close</a>
<br>
<p>
<?php
$connect = mysqli_connect("localhost", "root", "", "site_web");
$query = "SELECT * FROM pub where pos ='pos_init'";
 $result = mysqli_query($connect, $query);
?>
<?php
while($row1 = mysqli_fetch_array($result))
{ 
  
 
  $imageFileType = strtolower(pathinfo($row1['im'],PATHINFO_EXTENSION));

  $extensions_arr = array("mp4");
 
 if(in_array($imageFileType,$extensions_arr) ) 
{
?>

<video id="vid" width="850px" height="430px" autoplay>
  <source src="back/crud_pub/<?php echo $row1['im']; ?>" type="video/mp4">
  <source src="images/pog.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<?php
}
else
{ ?>                  

<img   width="850px" height="430px" src="back/crud_pub/<?php echo $row1['im']; ?>">
<?php
}
}
?>

<br/>
<br/>

</p>
</div>
</div>

   <?PHP
  include'head2.php' ;
?>
    <!-- END nav -->
  
  

    <section class="home-slider js-fullheight owl-carousel ftco-degree-bottom">
      <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-6 ftco-animate text-center">
              <h1 class="mb-4">
améliorer votre forme</h1>
              <h2 class="subheading">avec BF Academie</h2>
            </div>

          </div>
        </div>
      </div>

      
      <div class="slider-item js-fullheight" style="background-image: url(images/program-3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-7 ftco-animate text-center">
              <h1 class="mb-4">relevez le défi</h1>
              <h2 class="subheading">devenir anormal</h2>
            </div>

          </div>
        </div>
      </div>
    </section> 
    <br>
    <br>
<!---pub1-->



    <section class="ftco-section-services ftco-degree">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-xl-6 d-flex align-self-stretch">
            <div class="align-self-stretch"><img src="images/about.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-xl-6 align-self-stretch pt-5">
            <div class="row justify-content-center mb-3">
              
           
     </div><div class="col-md-12 heading-section ftco-animate">
                
                <h2 class="mb-4">ce que nous faisons?</h2>
              </div>
            </div>
            <div style=" position: absolute; left: 50%; top: 25%;" class="services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-ruler"></span>
              </div>
              <div class="text ml-5">
                <h3>Analysez votre objectif</h3>
              
              </div>
            </div>
            <div style=" position: absolute; left: 50%; top: 40%;" class="services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-gym"></span>
              </div>

              <div class="text ml-5">
                <h3>travaillé fort pour votre objectif</h3>
                
              </div>
            </div>
            <div style=" position: absolute; left: 50%; top: 55%;" class="services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tools-and-utensils"></span>
              </div>
              <div class="text ml-5">
                <h3>
Améliorez vos performances</h3>
                
              </div>
            </div>
            <div style=" position: absolute; left: 50%; top: 70%;" class="services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-abs"></span>
              </div>
              <div class="text ml-5">
                <h3>
Atteignez votre corps parfait</h3>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="5000">0</strong>
                    <span>Happy Customers</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="4560">0</strong>
                    <span>Perfect Bodies</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="570">0</strong>
                    <span>Working Hours</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="900">0</strong>
                    <span>Success Stories</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--pub2-->

  <?php
pub_pos2();
?>

  

   
    
<section class="ftco-section">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gym Classes</h3>
            <h2 class="mb-1">Les Coures</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a  class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-1.jpg);">
               
              </a>
              <div class="text mt-3">
                <h3><a href="#">Body Building</a></h3>
                <p>une discipline et un art de la performance qui consiste principalement à développer sa masse musculaire (hypertrophie) dans un but esthétique .</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-2.jpg);">
              
              </a>
              <div class="text mt-3">
                <h3><a href="#">Classe Aérobie</a></h3>
                <p>Gymnastique effectuée en musique, aux mouvements rapides, qui est censée modeler le corps et oxygéner les tissus.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-3.jpg);">
              
              </a>
              <div class="text mt-3">
                <h3><a href="#">Weight Lifting</a></h3>
                <p>l'activité de soulever des haltères ou d'autres poids lourds.Comporte l'ascenseur en un mouvement allant du sol à la position étendue et l'ascenseur en deux mouvements allant du sol à la position des épaules et des épaules à la position étendue.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-4.jpg);">
              
              </a>
              <div class="text mt-3">
                <h3><a href="#">Classe Yoga</a></h3>
                <p>une discipline du corps et de l’esprit qui comprend une grande variété d’exercices et de techniques qui
                    utilisent des postures physiques, des pratiques respiratoires et de méditation </p>
              </div>
            </div>
          </div>

        <div class="container">
        <div class="row mt-4 justify-content-center ftco-animate">
          <div class="col-md-4 text-center">
            <a href="program.php" class="btn-custom py-4">voir les autres coures <span class="ion-ios-arrow-down ml-2"></span></a>
          </div>
        </div>
      </div>
          
          
          
        </div>
      
      </div>
    </section>
   


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Pricing Tables</h3>
            <h2 class="mb-1">Membership Plans</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
              <h2 class="heading">One Day Training</h2>
              <span class="price"><sup>$</sup> <span class="number">7</span></span>
              <span class="excerpt d-block">100% free. Forever</span>
              <a href="#" class="btn btn-primary d-block px-2 py-4 mb-4">Get Started</a>
              
              <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
              
              <ul class="pricing-text">
                <li>Onetime Access To All Club</li>
                <li>Group Trainer</li>
                <li>Book A Group Class</li>
                <li>Fitness Orientation</li>
              </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
              <h2 class="heading">Pay Every Month</h2>
              <span class="price"><sup>$</sup> <span class="number">65</span></span>
              <span class="excerpt d-block">All features are included</span>
              <a href="#" class="btn btn-primary d-block px-3 py-4 mb-4">Get Started</a>
              
              <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
              
              <ul class="pricing-text">
                <li>Group Classes</li>
                <li>Discuss Fitness Goals</li>
                <li>Group Trainer</li>
                <li>Fitness Orientation</li>
              </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
              <h2 class="heading">1 Year Membership</h2>
              <span class="price"><sup>$</sup> <span class="number">125</span></span>
              <span class="excerpt d-block">All features are included</span>
              <a href="#" class="btn btn-primary d-block px-3 py-4 mb-4">Get Started</a>
              
              <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
              
              <ul class="pricing-text">
                <li>Group Classes</li>
                <li>Discuss Fitness Goals</li>
                <li>Group Trainer</li>
                <li>Fitness Orientation</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
   
    
    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div class="gallery ftco-gradient d-flex justify-content-center align-items-center">
              <div class="row justify-content-center">
                <div class="col-md-12 heading-section ftco-animate text-center">
                  <h3 class="subheading">Gallery Photo</h3>
                  <h2 class="mb-1">Instagram</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
             
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
              
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
             
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
            
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
            
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-7.jpg);">
            
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-8.jpg);">
             
            </a>
          </div>
        </div>
      </div>
    </section>


<?php 
include "footer.php"
?>


          
 
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



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
  <script>
function countDown(secs,elem) {
	$('.close').hide();
	var element = document.getElementById(elem);
	element.innerHTML = " Please wait for "+secs+" seconds";
	if(secs < 1) {
		clearTimeout(timer);
		element.innerHTML = "";
	
		$('.close').show();
	}
	secs--;
	var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
}
</script>
<script>countDown(10,"count");</script>
<script type='text/javascript'>

</script>
<script type="text/javascript">
	$(function(){
	sessionStorage.getItem('#popup');
var overlay = $('<div id="overlay"></div>');



 

<?php
$connect = mysqli_connect("localhost", "root", "", "site_web");
$query = "SELECT * FROM pub where pos ='pos_init'";
 $result = mysqli_query($connect, $query);
?>
<?php
while($row1 = mysqli_fetch_array($result))
{  
  
 
  $imageFileType = strtolower(pathinfo($row1['im'],PATHINFO_EXTENSION));

  $extensions_arr = array("mp4");
 
 if(in_array($imageFileType,$extensions_arr) ) 
{
?>
if (sessionStorage.getItem('#popup')!=='true') {
overlay.show();
overlay.appendTo(document.body);

$('.popup').show();


document.getElementById('vid').play();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();

});
}
else{document.getElementById('vid').pause();}

<?php
}
else
{ ?>                  
if (sessionStorage.getItem('#popup')!=='true') {
overlay.show();
overlay.appendTo(document.body);

$('.popup').show();



$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();

});
}

<?php
}
}
?>
sessionStorage.setItem('#popup','true');
});
</script>
</body>
</html>



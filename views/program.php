<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Muscle - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="validerchampcour.js"></script>
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
     include "head2.php"
    ?>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Les Cours</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil</a></span> <span>Program</span></p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section">
      <div class="container-fluid">
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

          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a  class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-5.jpg);">
         
              </a>
              <div class="text mt-3">
                <h3><a href="#">Spinning</a></h3>
                <p>Ce concept fait allusion aux exercices d'aérobie faits sur un vélo d'exercice fixe au rythme de la musique.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a  class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-6.jpg);">
          
              </a>
              <div class="text mt-3">
                <h3><a href="#">Fitness</a></h3>
                <p>Ensemble d'activités destinées à maintenir la forme physique par des exercices pratiqués à l'aide d'appareils..</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-7.jpg);">
        
              </a>
              <div class="text mt-3">
                <h3><a href="#">Body Pump</a></h3>
                <p>Le BodyPump est un cours de fitness à vocation de renforcement musculaire complet, pré-chorégraphié et en musique faisant partie du concept Body Training System.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-8.jpg);">
              </a>
              <div class="text mt-3">
                <h3><a href="#">Body balance</a></h3>
                <p>Le Body Balance est un cours qui alterne phases de yoga, de Tai-chi et de Pilates. Le tout en musique. « C'est un concept qui vient de Nouvelle Zélande..</p>
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </section>

    <section class="ftco-appointment">
      <div class="overlay"></div>
      <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
          <div class="col-md-6 d-flex align-self-stretch img" style="background-image: url(images/about-3.jpg);">
          </div>
          <div class="col-md-6 appointment ftco-animate">
            <h3 class="mb-3">Reserver Séance</h3>
            <form action="ajouterCour.php" method="POST" enctype="multipart/form-data" class="appointment-form">
              <div class="d-md-flex">
                <div class="form-group">
                  <input  type="text" name="nom" id="nom" class="form-control" placeholder="<?php 
                   if(empty($_SESSION['l']))
                   echo "Nom";
                  else
                  echo $_SESSION['l']; 

                  ?>" disabled >
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" name="prenom" id="prenom" class="form-control" placeholder="<?php 
                   if(empty($_SESSION['l']))
                   echo "Prenom";
                  else
                  echo $_SESSION['p']; 

                  ?>" disabled>
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="text" class="form-control appointment_date" id="date" name="date" placeholder="Date">
                  </div>
                </div>
                 
                <div class="form-group ml-md-4">
                  <input type="number" name="tel" id="tel" class="form-control" placeholder="telephone">
                </div>
              </div>
                <div class="form-group ml-md-4">
                  <div class="input-wrap">
                   
                    <SELECT  name="hor" id="hor" size="1">
<OPTION>8am
<OPTION>9am
<OPTION selected>10am
<OPTION>11am
<OPTION>2am
  <OPTION>3am
    <OPTION>4am
      <OPTION>5am
</SELECT>
                    <div >----------------------</div>
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <FORM>
<SELECT  name="coures" id="cours" size="1">
<OPTION>body lifting
<OPTION>weight lifting
<OPTION selected>fitness
<OPTION>body pump
<OPTION>aérobie
  <OPTION>body balance
    <OPTION>yoga
      <OPTION>spinning
</SELECT>
</FORM>
               
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="message" id="mess" cols="30" rows="2" class="form-control" id="message" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
            	<?php
            	if(empty( $_SESSION['l']))
            		{?>
            		
            		<a onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-primary py-3 px-4">reserver</a>
                 <?php
             }
                  else { ?>
                  	<input onclick="validerchamp()" type="submit" value="reserver" class="btn btn-primary py-3 px-4">
                       <?php
             }
?>
                </div>
              </div>
            </form>
          </div>          
        </div>
      </div>
    </section>
 
  <div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate"  method="POST" action="../core/check_acc4.php">
        
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
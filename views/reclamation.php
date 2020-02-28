<?php 
session_start();



 ?>
<html lang="en">
  <head>
    <title>Reclamation</title>
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

    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/linearicons2.css">
    <link rel="stylesheet" href="css/themify-icons2.css">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font7.ttf">
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

 <style type="text/css">
 	[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #F87DA9;
    position: absolute;
    top: 4px;
    left: 4px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
 </style>


  </head>
<body onload="generateCaptcha();">
<?php
 include'head2.php' ;
?>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Reclamation</span></p>
          </div>
        </div>
      </div>
    </section>


<section>
   <div class="container-login100" style="background-color: #c2c2a3 " >
      <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
        <form class="login100-form validate-form" method="POST" action="../core/ajoutreclamation.php">
          <span class="login100-form-title p-b-55">
            Reclamation
          </span>

  <!------------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------->
      <!------------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------->

    


 <div >
  <h2>Type de reclamation</h2>
  <br>
  <ul>
    <li>
      <input type="radio" checked  id="one" name="choix" value="probleme d'achat en ligne"   />
      <label for="one" >problème d'achat en ligne</label>
      
      <div class="check"></div>
    </li>
    <br>
    <br>
    <li>
      <input type="radio"  id="two" name="choix" value="service dans la salle" />
      <label for="two" >service dans la salle </label>
      
      <div class="check"></div>
    </li>

  </ul>
 
</div>
        


          <div class="wrap-input100 validate-input" >
          
          
            <span class="focus-input100"></span>
        

          <br>
<br>
          <div class="wrap-input100 validate-input" >
            <span class="label-input100">Votre Message de reclamation <br> <br> </span> 

<TEXTAREA name="reviews" rows=5 cols=50  required ></textarea>
 <span id='con'></span><br>

                        
          </div>


          <div class="flex-m w-full p-b-33">
            <div class="contact100-form-checkbox">
              
    <span class="label-input100">Captcha <br> <br> </span> 
 
   <input type="text" id="txtInput" style=" height: 40px; border: 1px solid #444444; "> 
     <br>
      <br>
    <input type="text" id="mainCaptcha"readonly="readonly"  
     style="  background-image:url('images/bg6.png');

 height: 40px;
   width:150px;
  font-variant: small-caps; 

   font-size:2vw;
 text-align: center;

   "
onclick="generateCaptcha();"
      > 

    
    
    
               



<br>
 <span id='success'></span><br>

          </div>
        </div>
          
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" id="login">
                Valider
              </button>
            </div>

            <a href="index.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
        Annuler
              <i></i>
            </a>
          </div>
        </form>
      

          

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
     
    
      <script>

 
         function generateCaptcha()
         {
             var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9');
             var i;
             for (i=0;i<4;i++){
               var a = alpha[Math.floor(Math.random() * alpha.length)];
               var b = alpha[Math.floor(Math.random() * alpha.length)];
               var c = alpha[Math.floor(Math.random() * alpha.length)];
               var d = alpha[Math.floor(Math.random() * alpha.length)];
                var e = alpha[Math.floor(Math.random() * alpha.length)];
                 var g = alpha[Math.floor(Math.random() * alpha.length)];
                  var f = alpha[Math.floor(Math.random() * alpha.length)];
                   var h = alpha[Math.floor(Math.random() * alpha.length)];

              }
            var code = a + '' + b + '' + '' + c + '' + d+''+g+''+e+''+f+''+h;
            document.getElementById("mainCaptcha").value = code
          }


          function CheckValidCaptcha(event){
              var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
              var string2 = removeSpaces(document.getElementById('txtInput').value);
              if (string1 == string2){
         document.getElementById('success').innerHTML = " ";

    
         //alert("Form is validated Successfully");
        
              }
              else{       
         event.preventDefault();
         document.getElementById('success').innerHTML = "Please enter a valid captcha.";
 document.getElementById('success').style.color="red";
              }
          }
          function removeSpaces(string){
            return string.split(' ').join('');
          }




            var formValid = document.getElementById('login');
     
 
          

         
      
         var cap = document.getElementById("success");
            formValid.addEventListener('click', CheckValidCaptcha);
                
            var str = document.getElementById('txtInput');
            function validation(){
      
    CheckValidCaptcha();
            

   }
            

</script>


  </body>
</html>
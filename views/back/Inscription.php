<?php 
 include'header.php' 
 ?>
<html lang="en">
  <head>
    <title>INSCRIPTION</title>
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
    <link rel="stylesheet" href="css/style_form.css">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="../css/style_form.css">
  <style>
   html {
    height: 100%;
    background-image: url('images/bg_2.jpg') /* fallback for old browsers */
    
 
</style>


  </head>
  <body   style="background-image: url('images/bg_2.jpg')">
   

    <!-- END nav -->

<section class="hero-wrap js-fullheight" >
      
     
    
       <div >


 <div  class="col-md-5 col-md-offset-3"  style=" top: 70px;left: 30px">
  
   <form id="register_form" method="POST" action="../core/ajoutclient.php">
  
    <ul id="progressbar" align="center">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:2px " id="list_login_details">Account Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:2px  ">Personal Details</a>
     </li>
  <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:2px ">Contact Details</a>
     </li>
    </ul>
   

    <div class="tab-content" style="margin-top:16px;">

     <div class="tab-pane active" id="login_details">
         <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">This is step 1</h3>
      <div class="panel panel-default">
   
       <div class="panel-body">
           <div class="form-group">
         <label>Username</label>

      
         <input type="text" name="username" id="username" class="form-control" required  placeholder="Username..."/>
         <span class="check_ok" style="color:#149541; font-size:1em;"></span>
      <span class="check_false"  style="color:#F55 ; font-size:1em;"></span>
         <span id="error_username" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Email</label>
         <input type="text" name="email" id="email" class="form-control" placeholder="email" />
         <span class="check_ok1" style="color:#149541; font-size:1em;"></span>
      <span class="check_false1"  style="color:#F55 ; font-size:1em;"></span>
         <span id="error_email" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Password</label>
         <input type="password" name="password" id="password" class="form-control"  placeholder="Password"/>
         <span id="error_password" class="text-danger"></span>
        </div>
            <div class="form-group">
         <label>Re-enter Password</label>
         <input type="password" name="password2" id="password2" class="form-control"  placeholder="confirm Password"/>
         <span id="error_password2" class="text-danger"></span>
         <span id="error_password3" class="text-danger"></span>
        </div>
       
        <div align="center">
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>

     <!------------------------------------------------------------------------->
      <!--Fin page1--> 
      <!------------------------------------------------------------------------->
    
     <div class="tab-pane fade" id="personal_details">
         <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">This is step 2</h3>
      <div class="panel panel-default">
       
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name" id="first_name" class="form-control" />
         <span id="error_first_name" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Last Name</label>
         <input type="text" name="last_name" id="last_name" class="form-control" />
         <span id="error_last_name" class="text-danger"></span>
        </div>
        <div class="form-group" id="gen">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" id ="one" name="gender" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" id ="two" name="gender" value="female"> Female
         </label>
           <span id="error_gender" class="text-danger"></span>
        </div>

           <div class="form-group">
      <label>Birthday </label>
      <br>
          <input  type="date" class="dataaa" name="dateofbirth" id="dateofbirth"    required >
            <span id='date'></span><br>
        </div>
       <div class="form-group">
      
      <br>
         <input style="display :none " type="file" name="img" onclick="validation()"><br>
         <input  id="output"   style="  height:60px  ;width:50px ; position: absolute; top: 450px; right: 20%"    >
         
        </div>
      <br>
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
      <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
        </div>
</div>
</div>
</div>
        <!------------------------------------------------------------------------->
      <!--Fin page2--> 
      <!------------------------------------------------------------------------->
         <div class="tab-pane fade" id="contact_details">
          <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">This is the last step</h3>
      <div class="panel panel-default">
      
       <div class="panel-body">
          <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
         <span id="error_mobile_no" class="text-danger"></span>
          <span id="error_mobile_no2" class="text-danger"></span>
        </div>

        <div class="form-group">
         <label>Enter Address</label>
         <textarea name="address" id="address" class="form-control"></textarea>
         <span id="error_address" class="text-danger"></span>
        </div>

      <div class="form-group">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb" type="checkbox" name="ckb">
              <label class="label-checkbox100" for="ckb">
                <span class="txt1">
                  I agree to the
                  <a href="term.txt"  target="_blank"  class="txt2 hov1">
                    Terms of User
                  </a>
                </span>
                <br>
                 <span id="error_term" class="text-danger"></span>
               
              </label>
          </div>
        </div>

        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
        </div>
       
       </div>
      </div>
     </div>

    </div>
   </form>
 </div>

</div>


   </section>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
     <br>
  <br>
  <br>
  <br>
  <br> 
      <br>
  <br>
     <br>
  <br>
 
  

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



<script src="js/inscrit.js"> </script>
 
  




  </body>
</html>  
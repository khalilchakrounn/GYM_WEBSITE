<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <title></title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


 <script src="veriferChamps_Pub.js"></script>

    <!-- Title Page-->
    <title>Gesion des Pubs</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
      
        


        <!-- MENU SIDEBAR-->
 <div class="page-wrapper">

        <aside class="menu-sidebar d-none d-lg-block">
            
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li >
                            <a class="js-arrow" href="ajouter_pub.php">
                                <i class="fas fa-table"></i>formulaire pub</a>                                      
                        </li>
                        <li >
                            <a href="../crud_promo/ajouter_promo.php">
                                <i class="fas fa-table"></i>formulaire promo</a>
                        </li>
                       
                   </ul>
                   
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
        <div class="page-container">

           
            <!-- HEADER DESKTOP-->

<br>
<br>
            <div class="col-lg-2 m-auto">
    <form action="../afficher_data.php">
 <button class="btn btn-success" type="submit" name="done"> View Data </button>
 <input type="hidden" value="<?PHP echo 1; ?>" name="page">
  <input type="hidden" value="<?PHP echo 2; ?>" name="sort">
  <input type="hidden" value="<?PHP echo 0; ?>" name="trie">
 </form>
 </div> 
              <div class="section__content section__content--p30">
             <div class="container-fluid">

<form method="post" action="ajout_pub_Php.php" enctype='multipart/form-data'>
  <br>
  <div class="card">

 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  formulaire Pub </h1>
 </div><br>
    

    <div class="col-12 col-md-9">
  <label>Nom:</label>
  <input type="text" name="nom" class="form-control" id="nome"><br>
</div>

 <div class="col-12 col-md-9">
      <label> Position: </label>
       <select name="pos" id="position" class="form-control">
        <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "site_web";


$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM pub where pos ='pos_init'";


$result1 = mysqli_query($connect, $query);
$rowcount=mysqli_num_rows($result1);
if ($rowcount == 0) {
  ?>
       <option value="0">choix</option>
       <option value="POS_INIT">pos_init</option>
       <option value="1">pos 1</option>
       <option value="2">pos 2</option>
       <option value="3">pos 3</option>
 <?php
 }
 else{ ?>

       <option value="0">choix</option>
       
       <option value="1">pos 1</option>
       <option value="2">pos 2</option>
       <option value="3">pos 3</option>

  <?php 
 }
 ?>      
       </select> <br> 
 </div>     

<div class="col-12 col-md-9">
      <label for="images_input" class=" form-control-label">Images input</label>
    <input type="file" id="images_input" name="file"  onchange="readURL(this);" class="form-control-file"><br>
<img id="blah" src="#" alt="" />
   

</div>

 <br>
  <div class="card-footer">
  <button type='submit' id ="save"  value='Save name' name='but_upload' onclick="verifChamps()" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>Submit</button>
  <button class="btn btn-danger btn-sm" type="reset" name="done"><i class="fa fa-ban"></i> Reset </button><br>
</div>
</div>
</form>
</div>
</div>
 
<br><br><br><br>

   <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/produits.js"></script>
</body>
</html>


<script type="text/javascript">
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(55);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>




  
 




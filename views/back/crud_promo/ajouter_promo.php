<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="verif.js"></script>
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <title></title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">



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
      <div class="page-wrapper">
        


        <!-- MENU SIDEBAR-->
         <div class="page-wrapper">

        <aside class="menu-sidebar d-none d-lg-block">
            
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li >
                            <a class="js-arrow" href="../crud_pub/ajouter_pub.php">
                                <i class="fas fa-table"></i>formulaire pub</a>                                      
                        </li>
                        <li >
                            <a href="ajouter_promo.php">
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
            
            <!-- HEADER DESKTOP-->
           <br>
     
            <div class="col-lg-2 m-auto">
    <form action="../afficher_data1.php">
 <button class="btn btn-success" type="submit" name="done"> View Data </button>
 </form>
 </div> 
              <div class="section__content section__content--p30">
             

<form method="post" action="ajout_promo_php.php" enctype='multipart/form-data'>
  <br>
  <div class="card">

 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  formulaire Promotion </h1>
 </div><br>
    

<div class="col-12 col-md-9">
      <label> nom: </label>
     
       <select name="nom" id="nome" class="form-control">
       <option value="0">choix</option>
       <option value="Promo_hiver">Promo_hiver</option>
       <option value="Black_friday">Black_friday</option>
       <option value="Promo_mois">Promo_mois</option>
       <option value="promo_ete">promo_ete</option>

       </select> 
 </div> 
<br>
 <div class="col-12 col-md-9">
      <label> ID_Produit_Promo: </label>
 <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "site_web";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT id FROM produits where etat ='false'";

// for method 1

$result1 = mysqli_query($connect, $query);
$options = "";
$options1 = "";
$values = "";
$rowcount=mysqli_num_rows($result1);
if ($rowcount > 0) {
    # code...

while($row1 = mysqli_fetch_array($result1))
{    $values="$row1[0]";
     $options = $options."<option value='$values'>$row1[0]</option>";
}
}
else
    $options = $options."<option value='888'>tous les Produits sont en Promo</option>";
?>
        <select class="form-control" name="idp" id="idp">
          <option value="0">choix</option>  
<?php echo $options;?>

        </select><br>
 </div>     
<div class="col-12 col-md-9">
      <label> Pourcentage: </label>
     
       <select name="pour" id="im" class="form-control">
       <option value="0">choix</option>
       <option value="10">10%</option>
       <option value="20">20%</option>
       <option value="30">30%</option>
       <option value="40">40%</option>
       <option value="50">50%</option>
       <option value="60">60%</option>
       <option value="70">70%</option>
       <option value="80">80%</option>
       </select> 
 </div> 
 <br>
 <div class="col-12 col-md-9">
  <label> Envoyer mail pour les clients : </label>
<input type="checkbox" id="mail" name="mail">
 </div>



  <div class="card-footer">
  <button type='submit' id ="save"  value='Save name' name='but_upload' onclick="verif()" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>Submit</button>
  <button class="btn btn-danger btn-sm" type="reset" name="done"><i class="fa fa-ban"></i> Reset </button><br>
</div>
</div>
</form>

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







  
 




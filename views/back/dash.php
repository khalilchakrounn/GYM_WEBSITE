<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <?php 
include 'statistique_walid.php';
include 'statistique_belkis.php';
include 'statistique_mandouch.php';
include "C:/wamp64/www/website_GYM/core/crudsC.php";
include "C:/wamp64/www/website_GYM/core/Clients.php";
$clie=new Clients();
$listcli=$clie->afficherClients();
$prC=new ProduitC();
$listeproduit=$prC->afficher_produit();
$aC=new abonementC();
$liste_abo=$aC->afficher_abonement_front();

$db = config::getConnexion();
$liste=$db->query("SELECT * from facture");
$prix=0;
 foreach($liste as $row){ 
    $prix+=$row['prix'];
                                            }

?> 
  
    <!-- Title Page-->
       <meta charset="utf-8">
    <title>Data Table</title>
    <script type="text/javascript" src="datatabel/jquery-3.1.0.min.js"></script>
   

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
<?php 
include 'head.php'
?>
                                       
       <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $listcli->rowCount()?></h2>
                                                <span>Membres</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $listeproduit->rowCount()?></h2>
                                                <span>Produits</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $liste_abo->rowCount()?></h2>
                                                <span>Abonements</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $prix?></h2>
                                                <span>Gain total</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>        



             <!--stat_1_walid-->  
            <div class="section__content section__content--p30">
            <h3 class="title-5 m-b-35">Statistique Like Pubs</h3> 
            <div class="container-fluid">
            <div class="row">

            <div class="col-lg-6">
           <div class="au-card m-b-30">
            <div class="au-card-inner">
           <div id="chart_div"></div>     
            </div>
             </div>
            </div>
            <div class="col-lg-6">
             <div class="au-card m-b-30">
             <div class="au-card-inner">            
             <div id="piechart_3d">
          </div> 
            </div>          
             </div>
             </div>
 
     </div>
            </div>
        </div>
              
   <!--stat_belkis-->    
  
      <div class="section__content section__content--p30">
                    <h3 class="title-5 m-b-35">Statistique commandes</h3> 
                    <div class="container-fluid">
                     <div class="row">
       <div class="col-lg-6">
             <div class="au-card m-b-30">
             <div class="au-card-inner">
               
 <div id="chart_div1">
          </div> 
            </div>          
             </div>
             </div>

            
       <div class="col-lg-6">
             <div class="au-card m-b-30">
             <div class="au-card-inner">
               
 <div id="piechart_3d1">
          </div> 
            </div>          
             </div>
             </div>

 </div>
     </div>
        </div>
       
         <!---end stat_belkis-->        
           
   <!--stat_belkis-->    
 
      <div class="section__content section__content--p30">
                    <h3 class="title-5 m-b-35">Statistique commandes</h3> 
                    <div class="container-fluid">
                     <div class="row">
       <div class="col-lg-6">
             <div class="au-card m-b-30">
             <div class="au-card-inner">
               
 <div id="chart_div2">
          </div> 
            </div>          
             </div>
             </div>

            
       <div class="col-lg-6">
             <div class="au-card m-b-30">
             <div class="au-card-inner">
               
 <div id="piechart_3d2">
          </div> 
            </div>          
             </div>
             </div>

 </div>
     </div>
        </div>
        </div> 
         <!---end stat_belkis-->    


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
</body>

</html>
<!-- end document-->

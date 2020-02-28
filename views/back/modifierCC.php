<?PHP
include "../../entites/courb.php";
include "../../core/courbC.php";
if (isset($_GET['id'])){
    $courbC=new courbC();
    $result=$courbC->recuperercourb($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $cour=$row['cour'];
        $temps=$row['temps'];
        $des=$row['descrip'];
        
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>modifier cours</title>

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

          <!-- MAIN CONTENT-->
 <!-- Form produits-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Formulaire </strong> Cours
                                    </div>
                                    <div class="card-body card-block">
                                        <form  method="POST"  enctype="multipart/form-data" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nom cour</label>
                                                </div>
                                               
                                                <div class="col-12 col-md-9">
                                                  
                                                    <select id="produit_input" name="cour" class="form-control">
                                                        <option value=""> choix</option>
                                                        <option value="repos">repos</option>
                                                        <option value="bodybuilding">bodybuilding</option>
                                                        <option value="yoga">yoga</option>
                                                        <option value="weigtlifting">weight lifting</option>
                                                        <option value="bodybump">body pump</option>
                                                        <option value="spinning">spinnig</option>
                                                        <option value="fitness">fitness</option>
                                                           <option value="bodybalance">body balance</option>
                                                              <option value="aerobie">aerobie</option>

                                                    </select>
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="marque_input" class=" form-control-label">temp</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="time" id="marque_input" name="temps" placeholder="marque du produit" class="form-control" value="<?php echo $temps ?>">
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                


                                           
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="mini-descript_input" class=" form-control-label">description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="marque_input" name="des" placeholder="description" class="form-control" value="<?php echo $des ?>">
                                                </div>
                                            </div>





                                       
                                   
                                    <div class="card-footer">
                                        <button type="submit" name="modifier" class="btn btn-primary btn-sm" onclick="submit_p()">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>">
                                        <a href="affichercour.php">
                                        <button type="submit" class="">
                                            <i class="fa fa-ban"></i> Return
                                        </button>
</a>
                                    </div>
                                    </form>
                                </div>
                                <?PHP
    }
}
if (isset($_POST['modifier'])){
      
    
   $courb=new courb($_POST['cour'],$_POST['temps'],$_POST['des']);
    $courbC->modifiercourb($courb,$_POST['cin_ini']);
        
        
   

}
?>
                                <!-- fin Form produits-->


<!-- Form categories -->
            
                        
                               
   <!-- fin Form categories-->
                                        
                                             
                    </div>
                </div>
            </div>
        

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
<!-- end document-->

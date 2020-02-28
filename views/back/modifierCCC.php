<?PHP
if(isset($_POST['modifier'])){
    $name = $_FILES['image']['name'];
  $target_dir = "img_coach/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);
}
?>




<?PHP
include "../../entites/coachb.php";
include "../../core/coachbC.php";




if (isset($_GET['id'])){
    $coachbC=new coachbC();
    $result=$coachbC->recuperercoachb($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $specialite=$row['specialite'];
          $email=$row['email'];
          $image=$row['image'];
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
    <title>modifier coache</title>

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
                                        <strong>Formulaire </strong> Coaches
                                    </div>
                                    <div class="card-body card-block">
                                        <form  method="POST"  enctype="multipart/form-data" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nom </label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <input type="text" id="marque_input" name="nom" placeholder="nom" class="form-control" value="<?php echo $nom ?>">
                                                </div>
                                               
                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">prenom </label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <input type="text" id="marque_input" name="prenom" placeholder="prenom" class="form-control" value="<?php echo $prenom ?>">
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">specialite </label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <input type="text" id="marque_input" name="specialite" placeholder="specialite" class="form-control" value="<?php echo $specialite ?>">
                                                </div>
                                            </div>
                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">email </label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <input type="text" id="marque_input" name="email" placeholder="email" class="form-control" value="<?php echo $email ?>">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">image </label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <input type="file" id="marque_input" name="image" class="form-control" value="<?php echo $email ?>">
                                                </div>
                                            </div>
                                


                                           
                                          





                                       
                                   
                                    <div class="card-footer">
                                        <button type="submit" name="modifier" class="btn btn-primary btn-sm" onclick="submit_p()">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>">
                                        <a href="affichercoach.php">
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
      
    
   $coachb=new coachb($_POST['nom'],$_POST['prenom'],$_POST['specialite'],$_POST['email'],$target_dir.$name);
    $coachbC->modifiercoachb($coachb,$_POST['cin_ini']);
        
        
   

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

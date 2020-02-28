
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Academie</title>

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
       
        <?php 
include 'head.php'
?>
        

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="card">
                                    <div class="card-header">
                                        <strong>Formulaire </strong> Abonnement
                                    </div>                                    
                                    <div class="card-body card-block">
                                        <form id="formulaire_a" method="POST" enctype="multipart/form-data" class="form-horizontal" action="ajout_abonement.php">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="abonement-input" class=" form-control-label">Nom abonement</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="abonement_input" name="abonement_input" placeholder="nom abonement..." class="form-control" required>
                                                </div>
                                            </div>                                          
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="cour" class=" form-control-label">cour</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="cour" name="cour" placeholder="cour enseignee " class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="prix_a_input" class=" form-control-label">Prix</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="prix_a_input" name="prix_a_input" placeholder="Prix de l'abonement" class="form-control" step ="0.1" required>
                                                </div>
                                            </div>                                            
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="duree" class=" form-control-label">duree de l'abonement</label>
                                                </div>                                               
                                              <div class="col-12 col-md-9" >
                                                    <select name="duree_box" id="duree_box" class="form-control">
                                                        <option value="0">choisissez:</option>
                                                        <option value="1 mois">1 mois</option>
                                                        <option value="2 mois">2 mois</option>
                                                        <option value="6 mois">6 mois</option>
                                                        <option value="1 ans">1 ans</option>
                                                    </select>
                                                </div>
                                            </div> 

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="image_input" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-12 col-md-9" >
                                                    <input type="file" id="image_input" name="image_input" multiple="" class="form-control-file">
                                                </div>
                                            </div>
                                       
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="submit_a(event)">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm" onclick="reset_abonement()">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                     </form>
                                    </div>
                                </div>                                                                         
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
  <script src="js/abonement.js"></script>

</body>


<!-- end document-->

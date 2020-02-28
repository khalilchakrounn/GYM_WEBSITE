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
    <title>Forms</title>

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

  
              <?php 
              $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "site_web";
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    $query = "SELECT * FROM commande ";
    $result1 = mysqli_query($connect, $query);
    $rowcount=mysqli_num_rows($result1);
    
        if ($rowcount==0){
          $id=1;
        }else {
          $id=$rowcount+1;
        }
              
                      

              ?>


            <!-- MAIN CONTENT-->
 <!-- Form commande-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div >
                 
                            <div >
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Formulaire </strong> Commande
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="ajouterCommande.php" method="post"  class="form-horizontal">
                                           <input type="hidden" name="id_cmd" value="<?= $id ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nom et prenom</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" name="id" value="<?= $id ?>" hidden >
                                                    <input type="text" id="text-input" name="nom_prenom" placeholder="foulen benfoulen class" class="form-control"> 
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="marque-input" class=" form-control-label">Numero de téléphone mobile</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="marque-input" name="numero" placeholder="00 000 000" class="form-control">
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Produit </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nom_prod" placeholder="foulen benfoulen class" class="form-control"> 
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Quantite</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="qte" placeholder="foulen benfoulen class" class="form-control"> 
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>

                                           
                                            
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Prix</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="prix" placeholder="foulen benfoulen class" class="form-control"> 
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">total</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="total" placeholder="foulen benfoulen class" class="form-control"> 
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nature-input" class=" form-control-label">Adresse</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nature-input" name="adresse" placeholder="Rue/Appartement/Suite/Bloc/Bâtiment" class="form-control">
                                                    <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="quantite-input" class=" form-control-label">Région</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="quantite-input" name="region" placeholder="" class="form-control">
                                                    <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="prix-input" class=" form-control-label">Ville</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="prix-input" name="ville" placeholder="ville" class="form-control">
                                                    <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">mode de livraison</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label for="q1" class="form-check-label ">
                                                                <input type="radio" id="q1" name="r1"  class="form-check-input" value="livraison standard">livraison standard
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="q2" class="form-check-label ">
                                                                <input type="radio" id="q2" name="r1"  class="form-check-input" value="retrait à la salle">retrait à la salle
                                                            </label>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div> 



                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">mode de paiement</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label for="q1" class="form-check-label ">
                                                                <input type="radio" id="q1" name="r2"  class="form-check-input" value="paiement à la livraison" checked>paiement à la livraison
                                                            </label>
                                                        </div>
                                                        
                                                    
                                                    </div>
                                                </div>
                                            </div>                                        
                                          
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Valider
                                        </button></form>

                                        <button type="reset" class="btn btn-danger btn-sm">
                                           <i class="fa fa-ban"></i> réinitialiser
                                        </button>
                                        <button type="reset"  >
                                           <a href="afficherCommande.php?page=<?PHP echo ""; ?>&sort=2&trie=<?PHP echo 0 ?>"><i class="fa fa-dot-circle-o"></i> retour</a>
                                        </button>
                                    </div>
                                    <div></div>
                                </div>
                                
                                <!-- fin Form produits-->


                                                  
                        </div>                       
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

</body>

</html>
<!-- end document-->

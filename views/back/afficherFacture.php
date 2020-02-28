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
    <title>BF Academie</title>

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
    <div class="page-wrapper" >
  
       <?php 
include 'head.php';
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid" >
                        
                        <div >
                            <div >
                                
                                <!-- END USER DATA-->
                            </div>
                            
                        </div>
                        <div >
                            <div >
                                <!-- DATA TABLE -->
                               
                                
                                
                               



                            <div class="col-lg-24">
                                <h2 class="title-1 m-b-25">Tableau de factures</h2>
                                <div class="table-responsive table--no-card m-b-40" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead>
                                            <tr>
                                                
                                                <th class="text-right">Actions</th>
                                                <th class="text-right">Nom et prenom</th>
                                                <th class="text-right">Date</th>
                                                <th class="text-right">Id commande</th>
                                                <th class="text-right">Produit</th>
                                                <th class="text-right">Quantite</th>
                                                <th class="text-right">Prix</th>
                                                <th class="text-right">Total</th>
                                                <th class="text-right">Adresse</th>
                                                <th class="text-right">Mode livraison</th>
                                                <th class="text-right">Mode paiement</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?PHP
include "C:/wamp64/www/website_GYM/config.php";
include "C:/wamp64/www/website_GYM/core/factureC.php";

$facture1C=new factureC();
$listefactures=$facture1C->afficherFacture();
?>                          
<?PHP
foreach($listefactures as $row){
    ?>                 
                                            <tr>
                                                 <td>
                                                    
                                                    <div class="table-data-feature">
                                                       <form action="modifierFacture.php">

                                                       <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                        </button>
                                                        </form>
                                                    <br>
                                                        <form method="POST" action="supprimerFacture.php">
    
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" name="supprimer" value="supprimer">
                                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                       
                                                    </div>
                                                    </form>
                                                </td>
                                                <td>
                                                   <?PHP echo $row['nom_prenom']; ?> 
                                                </td>
                                                <td><?PHP echo $row['dat']; ?></td>
                                                <td><?PHP echo $row['id_cmd']; ?></td>
                                                <td><?PHP echo $row['nom_prod']; ?></td>
                                                <td><?PHP echo $row['quantite']; ?></td>
                                                <td><?PHP echo $row['prix']; ?></td>
                                                 <td><?PHP echo $row['total']; ?></td>
                                                <td><?PHP echo $row['adresse']; ?></td>
                                                <td> <?PHP echo $row['mode_livraison']; ?></td>
                                                <td> <?PHP echo $row['mode_paiement']; ?>
                                            </td>
                                                
                                                
                                            </tr>
                                            
 <?PHP
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


 <!-- END DATA TABLE -->

                            
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

<?PHP
include "C:/wamp64/www/website_GYM/core/crudsC.php";

$catC=new categorieC();
$listecategorie=$catC->afficher_categorie();

?>
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
        


          <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Formulaire </strong> Produits
                                    </div>
                                    <div class="card-body card-block">
                                        <form  method="POST" id="formulaire_p" enctype="multipart/form-data" class="form-horizontal" action="ajout_produit.php">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nature" class=" form-control-label"  >Type du produit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="type_input" name="type_input" placeholder="veuillez saisir accessoires ou consomables" class="form-control" required> 
                                                     <small class="help-block form-text">veuillez remplir ce champ</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nom produit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="produit_input" name="produit_input" placeholder="nom produit" class="form-control" required> 
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>                                                                                       
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="quantite_input" class=" form-control-label">Quantite en stock</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="quantite_input" name="quantite_input" placeholder="quantite en stock" class="form-control" required>
                                                    <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="idcat_input" class=" form-control-label">Categorie</label>
                                                </div>
                                                <div class="col-12 col-md-9">                        
                                                    <select name="idcat_input" id="idcat_input" class="form-control" required>
                                                        <?php
                                            foreach($listecategorie as $row){ 
                                            ?>         
                            <option value="<?php echo $row['id'];?>"><?PHP echo $row['nom']; ?></option>                    
                                            <?PHP
                                             }
                                             ?>
                                                    </select>                                                
                                                    <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="prix_input" class=" form-control-label">Prix</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="prix_input" name="prix_input" placeholder="Prix" class="form-control" step ="0.1" required>
                                                    <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>                                          
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="descript_input" class=" form-control-label">description</label>
                                                </div>
                                                <div class="col-12 col-md-9" >
                                                    <textarea name="descript_input" id="descript_input" rows="12" placeholder="Contenu..." class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ingred_input" class=" form-control-label">Ingredients</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="ingred_input" id="ingred_input" rows="9" placeholder="Contenu..." class="form-control" ></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="gout" class=" form-control-label">Gout</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <input type="text" id="gout" name="gout" placeholder="gout du produit " class="form-control" >
                                                </div>                                                
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Poids</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="poids_input" name="poids_input" placeholder="veuillez saisir le poids exacte" class="form-control" step ="0.1">
                                                </div>
                                               
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="image_input" class=" form-control-label">Images input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="imagess_input" name="imagess_input" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9">
  <label> Envoyer mail pour les clients : </label>
<input type="checkbox" id="mail" name="mail">
 </div>


                                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" onclick="submit_produit(event)">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm" onclick="reset_produits()">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>


                                    </div>
                                </form>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>


       <script type="text/javascript">
           
function submit_produit(event)
{

    var produit_type=document.getElementById("type_input") ;  
var produit_nom=  document.getElementById("produit_input") ;
var produit_quantite=  document.getElementById("quantite_input") ;
var idcat=  document.getElementById("idcat_input") ;
var produit_prix=  document.getElementById("prix_input") ;
var produit_disc=  document.getElementById("descript_input") ;
var produit_ing=  document.getElementById("ingred_input") ;
var produit_gout=  document.getElementById("gout") ;
var produit_poids=  document.getElementById("poids_input") ;
var produit_image=  document.getElementById("imagess_input") ;

 if(  produit_type.value == "" || produit_nom.value == "" ||produit_quantite.value == "" ||idcat.value == "" || produit_prix.value == "" || produit_disc.value == ""|| produit_image.value == ""|| produit_poids.value == "")
                        {
                            event.preventDefault();
                            alert("verifier les champs");   
                        }
else{
        if(isNaN(produit_type.value)==false )
            {
                produit_type.style.color = 'red';
                event.preventDefault();
                alert("veuillez saisir un type !");
            }
   else if(isNaN(produit_nom.value)==false )
            {
                produit_nom.style.color = 'red';
                event.preventDefault();
                alert("veuillez saisir un nom !");
            }   
   
    else
    {alert("ajout reussi");}    

        
 }
}


       </script> 

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
    <!--script src="js/produits.js"></script-->

</body>


<!-- end document-->

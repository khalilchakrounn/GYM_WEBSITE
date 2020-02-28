
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
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png"  />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">                                                
                        <li class="active">
                            <a href="affichage_categorie.php">
                                <i class="far fa-check-square"></i>Gestion des Categories</a>
                        </li>
                        <li class="active">
                            <a href="affichage_produits.php">
                                <i class="far fa-check-square"></i>Gestion des Produits</a>
                        </li>
                        <li class="active">
                            <a href="affichage_abonement.php">
                                <i class="far fa-check-square"></i>Gestion des Abonements</a>
                        </li>                      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->


        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png"  />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="affichage_categorie.php">
                                <i class="far fa-check-square"></i>Gestion des Categories</a>
                        </li>
                        <li class="active">
                            <a href="affichage_produits.php">
                                <i class="far fa-check-square"></i>Gestion des Produits</a>
                        </li>
                        <li class="active">
                            <a href="affichage_abonement.php">
                                <i class="far fa-check-square"></i>Gestion des Abonements</a>
                        </li> 
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->



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
                                                    <input type="number" id="idcat_input" name="idcat_input" placeholder="id de la categorie " class="form-control" required>
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
    <script src="js/produits.js"></script>

</body>


<!-- end document-->

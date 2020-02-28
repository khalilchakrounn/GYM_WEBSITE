<?PHP

include "../core/categorieC.php";
if (isset($_GET['modif'])){
	$catC=new categorieC();
	$id=$_GET['modif'];
    $result=$catC->recuperer_categorie($_GET['modif']);
	foreach($result as $row){
		$nom=$row['nom'];		
		$description=$row['description'];
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





<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                                <div class="card">
                                    <div class="card-header">
                                        Modifier Categorie
                                    </div>
                                    <div class="card-body card-block">
                                        <form  method="POST"  enctype="multipart/form-data" class="form-horizontal" >
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nom categorie</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nom_md" name="nom_md" class="form-control"  value="<?PHP echo $nom ?>">                                                     
                                                </div>
                                            </div>                                                                                       
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="descript_md" class=" form-control-label">description</label>
                                                </div>
                                                <div class="col-12 col-md-9" >
                                                    <textarea name="descript_md" id="descript_md" rows="12" value="<?PHP echo $description ?>" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                                                                                           
                                    <div class="card-footer">
                                    	
                                        <button type="submit" class="btn btn-primary btn-sm"  name="modifier" value="modifier">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <a href="affichage_categorie.php">
                                        <button  class="btn btn-danger btn-sm"  name="retour" value="retour">
                                            <i class="fa fa-dot-circle-o"></i> retour
                                        </button></a>
                                      
                                    </div>
                                </form>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>



<?PHP
	}
}
if (isset($_POST['modifier'])){
	$caa=new Categorie($_POST['nom_md'],$_POST['descript_md']);
	$catC->modifier_categorie($caa,$id);
	
	header('Location: affichage_categorie.php');
}
?>
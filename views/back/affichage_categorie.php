<!DOCTYPE html>
<html lang="en">

<head>
    <?PHP
include "C:/wamp64/www/website_GYM/core/categorieC.php";
$catC=new categorieC();
$listecategorie=$catC->afficher_categorie();

?>
    <style type="text/css">
        #wiou{
            right: 5%;
            position: absolute;
        }

    </style>
   
    <!-- Title Page-->
       <meta charset="utf-8">
    <title>Data Table</title>
    <script type="text/javascript" src="datatabel/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="datatabel/datatabel/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatabel/datatabel/media/css/jquery.dataTables.min.css">

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
<body >
<?php 
include 'head.php'
?>


<div class="main-content">
                <div class="section__content section__content--p30">
                    <h3 class="title-5 m-b-35">Table Categories</h3>
                    <div class="container-fluid">
<div class="table-data__tool-right">
                                        <a href="formulaire_categorie.php">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>ajouter</button></a>  
                                </div>
<br><br>


 <table id="datatables" class="table table-borderless table-striped table-earning">
 <thead>
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Nom </th>
 <th>description </th>
 <th>Supression</th>
 <th>Modifier
</th>
  </tr >
</thead>
<tbody>

                                            <?php
                                            foreach($listecategorie as $row){ 
                                            ?>
    <tr class="text-center">
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['description']; ?></td>
    
    
        <td>
                            <a href="supp_categorie.php?delete=<?php echo $row['id'];?>">
                                <button class="btn-danger btn" type="submit" name="supprimer" value="supprimer">
                             <i class="zmdi zmdi-delete"></i>Supprimer
                             </button></a>
           
   
        </td>
        <td>                              
             <a href="modif_categorie.php?modif=<?php echo $row['id'];?>">
             <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Modifier">
                             <i class="zmdi zmdi-edit"></i> Modifier
                            </button></a>
    </td>
    </tr>
    <?PHP
}
?>
</tbody>
</table>



</div>
</div>
</div>



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
    <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables').DataTable({
        "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]]
    });
} );
    </script>
<script src="js/main.js"></script>
</body>

</html>
<!-- end document-->

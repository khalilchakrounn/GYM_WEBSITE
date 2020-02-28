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
    <title>Tables</title>

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
   <link rel="stylesheet" type="text/css" href="affichercour.css">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body >
    
        <?php
      include "head.php"
      ?>
        <!-- PAGE CONTAINER-->
        
            <!-- HEADER DESKTOP-->
           
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div >
                            <div >
                                
                                <!-- END USER DATA-->
                            </div>
                            
                        </div>
                        <div >
                            <div >
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Tableaux des Séances réserver par les clients</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                           
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                           
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                       
                                    </div>
                                    <div class="table-data__tool-right">
                                         <button id="myBtn" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            
                                            <i  class="zmdi zmdi-plus"></i>ajouter séance</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">




                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>id</th>
                                                <th>date</th>
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>horaire</th>
                                                <th>message</th>
                                                <th>coure</th>
                                                <th>telephone</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                        <?PHP
include "../../core/courC.php";
$cour1C=new courC();
$listecours=$cour1C->affichercour();
?>                          
<?PHP
foreach($listecours as $row){
    ?>                 
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                
                                                <td><?PHP echo $row['id']; ?></td>
                                                <td><?PHP echo $row['datet']; ?></td>                    
                                                <td><?PHP echo $row['nom']; ?></td>
                                                <td><?PHP echo $row['prenom']; ?></td>       
                                                <td><?PHP echo $row['horaire']; ?> </td>
                                                <td><?PHP echo $row['message']; ?></td>
                                                <td><?PHP echo $row['coure']; ?> </td>
                                                <td><?PHP echo $row['telephone']; ?></td>
                                                
                                                <td>
                                                        <div class="table-data-feature">
                              
                                                         <form method="POST" action="supprimercour.php">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" name="supprimer" value="supprimer">
                                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></form>
                                                        <a href="modifiercour.php?id=<?PHP echo $row['id']; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>
                                                       
                                                          </div>
                                                    
                                                </td>
                                            </tr>
 <?PHP
}
?>
</tbody>
 </table>
 </div>

<br>

                                <h3 class="title-5 m-b-35">tableaux cours de la semaine</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                           
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                           
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                       
                                    </div>
                                                                   </div>


                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>id</th>
                                                <th>cour</th>
                                                <th>temps</th>
                                                <th>description</th>
                                            </tr>
                                        </thead>
                                     
<?php
$connect = mysqli_connect("localhost", "root", "", "site_web");
$query = "SELECT * FROM programme";
 $result = mysqli_query($connect, $query);
?>

 


<?php
while($row1 = mysqli_fetch_array($result))
{ ?>                 
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                
                                                <td><?php echo $row1['id']; ?> </td>
                                                <td><?php echo $row1['cour']; ?></td>
                                                <td><?php echo $row1['temps']; ?></td>
                                                 <td><?php echo $row1['descrip']; ?></td>
                                            <td>
                                                        <div class="table-data-feature">
                              
                                                         
                                                        <form action="modifierCC.php">
                                                        <button class="item" data-toggle="tooltip" name="modifier" data-placement="top" title="Edit">
                                                             <input type="hidden" value="<?PHP echo $row1['id']; ?>" name="id">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></form>
                                                       
                                                          </div>
                                                    
                                                </td>
                                            </tr>

 <?php
}
?>
</table>





                                <!-- END DATA TABLE -->




                                <div id="myModal" class="modal" >
                         
                                  <!-- Modal content -->
                                  <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <h2>Ajouter Séance pour client</h2>
                                    <form method="POST" action="ajouterCour.php">
                                        <table>
                                            <tr>
                                                
                                                <th>date</th>
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>horaire</th>
                                                <th>message</th>
                                                <th>coure</th>
                                                <th>telephone</th>
                                            </tr>
                                            <tr>

                                               <td> <input type="text" name="date"></td> 
                                                <td><input type="text" name="nom"> </td>
                                                <td><input type="text" name="prenom"> </td>
                                                <td>
                                                 <SELECT  name="hor" id="hor" size="1">
<OPTION>8am
<OPTION>9am
<OPTION selected>10am
<OPTION>11am
<OPTION>2am
  <OPTION>3am
    <OPTION>4am
      <OPTION>5am
</SELECT>




                                                 </td>
                                                <td><input type="text" name="message"> </td>
                                                <td> <FORM>
<SELECT  name="coures" id="cours" size="1">
<OPTION>body lifting
<OPTION>weight lifting
<OPTION selected>fitness
<OPTION>body pump
<OPTION>aérobie
  <OPTION>body balance
    <OPTION>yoga
      <OPTION>spinning
</SELECT>
</FORM> </td>
                                                <td><input type="text" name="tel"> </td>
                                            </tr>
                                            

                                        </table>
                                        <table>
                                            <tr>
                                                <tr>
                                                <button class="add" onclick="validerchamp()" value="Valider"> Ajouter </button>
                                            </tr>
                                            </tr>
                                        </table>
                                    </form>
                                    
                                    

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </div>
                        </div>
                        
                        <div class="row m-t-30">
                            <div class="col-md-12">
                               
                                <!-- END DATA TABLE-->
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>

    </div>
  <script src="affichercour.js" type="text/javascript"></script>
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

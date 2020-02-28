<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    

    <style type="text/css">
        #a{
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
                    <div class="container-fluid">
    <form action="form_cmd.php">
       <button  id="a" type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small"><a href="form_cmd.php"></a>
          <i class="zmdi zmdi-plus"></i>ajout cmd </button>
    </form>
<form action="../PDF/html2pdf/examples/extrait_cmd.php" method="POST">
                                                    <button ><image src="../images/icons/download.png" style="width:40px">
                                                           extrait
                                                       </button>
                                                        </form>

<div class="col-lg-24">
     <h2 class="title-1 m-b-25">Tableau de commandes</h2>
      <div class="table-responsive table--no-card m-b-40" >

        <form action="afficherCommande.php?sort=<?PHP  echo 2; ?>&page=<?PHP echo ""; ?>&trie=<?PHP $x=$_GET['trie']; echo 0 ?>" method="post">
            <input id="a" type="text" name="valueToSearch" placeholder="recherche"><br>

            <input id="a" style="width: 202px;" type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" name="search" value="Filter"><br>
            </form>
            <label>Show:</label>
  <select id="sor" class="">
      <?PHP 
      $x=$_GET['sort'];
      switch ($x) {
          case '2':
                   ?>       <option  value="afficherCommande.php?sort=<?PHP echo 2; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>">defaut(2)</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo 3; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>">3</option>
                            <option value="afficherCommande.php?sort=<?PHP echo 5; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>"">5</option>
                            <option value="afficherCommande.php?sort=<?PHP echo 10; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>"">10</option>
             <?PHP  break;
          case '3':         
                   ?>       

                            <option  value="afficherCommande.php?sort=<?PHP echo 3; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>">3</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo 2; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>">defaut(2)</option>
                            <option value="afficherCommande.php?sort=<?PHP echo 5; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>"">5</option>
                            <option value="afficherCommande.php?sort=<?PHP echo 10; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>"">10</option>
             <?PHP  break;
             case '5':
                   ?>      <option value="afficherCommande.php?sort=<?PHP echo 5; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>"">5</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo 2; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>">defaut(2)</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo 3; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>">3</option>
                             <option value="afficherCommande.php?sort=<?PHP echo 10; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>"">10</option>
             <?PHP  break;
             case '10':     
                   ?>       <option value="afficherCommande.php?sort=<?PHP echo 10; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>"">10</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo 2; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>">defaut(2)</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo 3; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>">3</option>
                            <option value="afficherCommande.php?sort=<?PHP echo 5; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo $_GET['trie'] ?>"">5</option>
                            
             <?PHP  break;
          default:
              # code...
              break;
      }


      ?>
                            
                        </select> 
                   
                        <label>Sort by:</label>
  <select id="tr" class="">
      <?PHP 
      $x=$_GET['trie'];
      switch ($x) {
          case '0':
                   ?>       <option  value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 0 ?>">defaut</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 10 ?>">nom prenom et nom produit</option>
                            <option value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 11 ?>"">region , ville et adresse</option>
                            
             <?PHP  break;
          case '10':         
                   ?>       

                            <option  value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 10 ?>">nom prenom et nom produit</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 0 ?>">defaut</option>
                            <option value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 11 ?>"">region , ville et adresse</option>
                          
             <?PHP  break;
             case '11':
                   ?>      <option value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 11 ?>"">region , ville et adresse</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 0 ?>">defaut</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 10?>">nom prenom et nom produit</option>
                           
             <?PHP  break;
            
          default:
             ?>  <option  value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 0 ?>">defaut</option>
                            <option  value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 10 ?>">nom prenom et nom produit</option>
                            <option value="afficherCommande.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo ""; ?>&trie=<?PHP echo 11 ?>"">region , ville et adresse</option>
                          
            <?PHP   break;
      }


      ?>
                            
                        </select>   

      <table class="table table-borderless table-striped table-earning" >
  <thead>
<tr class="bg-dark text-white text-center">
 
                                                <th class="text-right">actions</th>
                                                 <th><a href="afficherCommande.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 1 ?>
 "> ↓ </a>nom prenom<a href="afficherCommande.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 2 ?>
 ">↑</th>
                                                <th class="text-right">numero</th>
                                                <th><a href="afficherCommande.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 3 ?>
 "> ↓ </a>produit<a href="afficherCommande.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 4 ?>
 ">↑</th>
                                                <th class="text-right">quantite</th>
                                                <th class="text-right"> prix </th>
                                                <th><a href="afficherCommande.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 5 ?>
 "> ↓ </a>addresse<a href="afficherCommande.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 6 ?>
 ">↑</th>
                                                <th><a href="afficherCommande.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 7 ?>
 "> ↓ </a>region<a href="afficherCommande.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 8 ?>
 ">↑</th>
                                                <th class="text-right"> ville</th>
                                                <th class="text-right"> mode livraison</th>
                                                <th class="text-right">mode paiement</th>
  </tr >


</thead>
<?PHP
include "C:/wamp64/www/website_GYM/core/commandeC.php";
$commande1C=new commandeC();
$pa=$_GET['sort'];
$page=$_GET['page'];
$trie=$_GET['trie'];

if ($page== "" ||$page=="1") {
   $page1=0;
}

else
{
  $page1=($page*$pa)-$pa;

}

if ($trie == 1) {
   $listecommandes=$commande1C->trie_nom_desc($page1,$pa);
}

elseif ($trie ==2) {
   $listecommandes=$commande1C->trie_nom_asc($page1,$pa);
}
elseif ($trie ==3) {
   $listecommandes=$commande1C->trie_produit_desc($page1,$pa);
}
elseif ($trie ==4) {
   $listecommandes=$commande1C->trie_produit_asc($page1,$pa);
}
elseif ($trie ==5) {
   $listecommandes=$commande1C->trie_adresse_desc($page1,$pa);
}
elseif ($trie ==6) {
   $listecommandes=$commande1C->trie_adresse_asc($page1,$pa);
}
elseif ($trie ==7) {
   $listecommandes=$commande1C->trie_region_desc($page1,$pa);
}
elseif ($trie ==8) {
   $listecommandes=$commande1C->trie_region_asc($page1,$pa);
}
elseif ($trie ==10) {
   $listecommandes=$commande1C->trie_nom_prod($page1,$pa);
}
elseif ($trie ==11) {
   $listecommandes=$commande1C->trie_region_ville_adresse($page1,$pa);
}

elseif (!empty($_POST['valueToSearch'])) {
   $listecommandes=$commande1C->affichercommande_search($_POST['valueToSearch']);
}
else
$listecommandes=$commande1C->afficherCommande($page1,$pa);

?>

<?PHP
foreach($listecommandes as $row){
    ?>                 

    <tr class="text-center">
        <td>
                                                    
    
                                                    <div class="table-data-feature" >
                                                       <form action="modifierCommande.php"  enctype="multipart/form-data">

                                                       <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                        </button>
                                                        </form>
                                                    <br>
                                                        <form method="POST" action="supprimerCommande.php" >
    
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" name="supprimer" value="supprimer">
                                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                       
                                                    
                                                    </form>
                                                    </div>
                                                </td>
     <td>
                                                   <?PHP echo $row['nom_prenom']; ?> 
                                                </td>
                                                <td><?PHP echo $row['tel']; ?></td>
                                                <td><?PHP echo $row['nom_prod']; ?></td>
                                                <td><?PHP echo $row['quantite']; ?></td>
                                                <td><?PHP echo $row['prix']; ?></td>
                                                <td>
                                                    <?PHP echo $row['adresse']; ?>
                                                </td>
                                                <td><?PHP echo $row['region']; ?></td>
                                                    
                                                <td>
                                                   <?PHP echo $row['ville']; ?>
                                                </td>

                                               
                                             
                                                <td>
                                                    <?PHP echo $row['mode_livraison']; ?>
                                                </td>
                                                <td>
                                                    
                                                        <?PHP echo $row['mode_paiement']; ?>
                                                    
                                                </td>

    
</tr>

    <?PHP
}
?>

</table>

</div>
<?PHP
if (isset($_POST['search'])) 
{
 
 
 if ($_POST['valueToSearch']=="") 
 {$count=$commande1C->row_count_commande();

$count =ceil($count/$pa);
      echo "<br>";
?>
<a id="page" class="btn btn-success" href="afficherCommande.php?page=<?PHP echo 1; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo"Debut";?></a>
<?PHP
for ($i=1; $i <=$count ; $i++) { 
    ?><a id="page" class="btn btn-success"href="afficherCommande.php?page=<?PHP echo $i; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo $i;?></a>
      

   

    <?PHP
}
?>
<a class="btn btn-success" href="afficherCommande.php?page=<?PHP echo $count; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo" fin";?></a>
<br>

 <?PHP

    }   
}

else
{
 $count=$commande1C->row_count_commande();

$count =ceil($count/$pa);

echo "<br>";
?>
<a id="page" class="btn btn-success" href="afficherCommande.php?page=<?PHP echo 1; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo"Debut";?></a>
<?PHP
for ($i=1; $i <=$count ; $i++) { 
    ?><a id="page" class="btn btn-success"href="afficherCommande.php?page=<?PHP echo $i; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo $i;?></a>
      

   

    <?PHP
}
?>
<a class="btn btn-success" href="afficherCommande.php?page=<?PHP echo $count; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo" fin";?></a>
<br>
  <?PHP  
}
?>

</div>
</div>
</div>
<br>


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
    document.getElementById("sor").addEventListener('change', function () {
    window.location = this.value;
}, false);
</script>
   <script type="text/javascript">
    document.getElementById("page").addEventListener('change', function () {
    window.location = this.value;
}, false);
</script>
   <script type="text/javascript">
    document.getElementById("tr").addEventListener('change', function () {
    window.location = this.value;
}, false);
</script>
   <script type="text/javascript">
    document.getElementById("search").addEventListener('change', function () {
    window.location = this.value;
}, false);
</script>
    <!-- Main JS-->
<script src="js/main.js"></script>
</body>

</html>
<!-- end document-->

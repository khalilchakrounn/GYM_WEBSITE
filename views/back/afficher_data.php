<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    

    <style type="text/css">
        #wiou{
            right: 1%;
            position: absolute;


        }

 #wiou1{
            right: 2%;
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
                
                    <div class="container-fluid">
    <form action="crud_pub/ajouter_pub.php">
                                        <button  id="wiou" type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small"><a href="crud_pub/ajouter_pub.php"></a>
                                            <i class="zmdi zmdi-plus"></i>add PUB </button>
                                        </form>
          
<h3 class="title-5 m-b-35">table Pubs</h3>
 <form action="afficher_data.php?sort=<?PHP  echo 2; ?>&page=<?PHP echo ""; ?>&trie=<?PHP $x=$_GET['trie']; echo 0 ?>" method="post">
            <input id="wiou" type="text" name="valueToSearch" placeholder="Search(vide=tout)"><br>

            <input id="wiou" style="width: 202px;" type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" name="search" value="Filter"><br>
            </form>
            <label>Show:</label>
  <select id="sor" class="">
      <?PHP 
      $x=$_GET['sort'];
      switch ($x) {
          case '2':
                   ?>       <option  value="afficher_data.php?sort=<?PHP echo 2; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>">default(2)</option>
                            <option  value="afficher_data.php?sort=<?PHP echo 3; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>">3</option>
                            <option value="afficher_data.php?sort=<?PHP echo 5; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>"">5</option>
                            <option value="afficher_data.php?sort=<?PHP echo 10; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>"">10</option>
             <?PHP  break;
          case '3':         
                   ?>       

                            <option  value="afficher_data.php?sort=<?PHP echo 3; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>">3</option>
                            <option  value="afficher_data.php?sort=<?PHP echo 2; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>">default(2)</option>
                            <option value="afficher_data.php?sort=<?PHP echo 5; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>"">5</option>
                            <option value="afficher_data.php?sort=<?PHP echo 10; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>"">10</option>
             <?PHP  break;
             case '5':
                   ?>      <option value="afficher_data.php?sort=<?PHP echo 5; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>"">5</option>
                            <option  value="afficher_data.php?sort=<?PHP echo 2; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>">default(2)</option>
                            <option  value="afficher_data.php?sort=<?PHP echo 3; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>">3</option>
                             <option value="afficher_data.php?sort=<?PHP echo 10; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>"">10</option>
             <?PHP  break;
             case '10':     
                   ?>       <option value="afficher_data.php?sort=<?PHP echo 10; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>"">10</option>
                            <option  value="afficher_data.php?sort=<?PHP echo 2; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>">default(2)</option>
                            <option  value="afficher_data.php?sort=<?PHP echo 3; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>">3</option>
                            <option value="afficher_data.php?sort=<?PHP echo 5; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo $_GET['trie'] ?>"">5</option>
                            
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
                   ?>       <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 0 ?>">default</option>
                            <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 10 ?>">ID,Nom</option>
                            <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 11 ?>"">Nom,Position</option>
                            <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 12 ?>"">NB_like,ID</option>
             <?PHP  break;
          case '10':         
                   ?>       

                            <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 10 ?>">ID,Nom</option>
                            <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 0 ?>">default</option>
                            <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 11 ?>"">Nom,Position</option>
                            <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 12 ?>"">NB_like,ID</option>
             <?PHP  break;
             case '11':
                   ?>      <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 11 ?>"">Nom,Position</option>
                            <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 0 ?>">default</option>
                            <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 10?>">ID,Nom</option>
                             <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 12 ?>"">NB_like,ID</option>
             <?PHP  break;
             case '12':     
                   ?>       <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 12 ?>"">NB_like,ID</option>
                            <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 0 ?>">default</option>
                            <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 10?>">ID,Nom</option>
                             <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 11 ?>"">Nom,Position</option>
                            
             <?PHP  break;
          default:
             ?>  <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 0 ?>">default</option>
                            <option  value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 10 ?>">ID,Nom</option>
                            <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 11 ?>"">Nom,Position</option>
                            <option value="afficher_data.php?sort=<?PHP echo $_GET['sort']; ?>&page=<?PHP echo 1; ?>&trie=<?PHP echo 12 ?>"">NB_like,ID</option>
            <?PHP   break;
      }


      ?>
                            
                        </select>   

                           
            


 <table  class="table table-borderless table-striped table-earning">
 <thead>
 <tr class="bg-dark text-white text-center">
 
 <th><a href="afficher_data.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 1 ?>
 "> ↓ </a>ID<a href="afficher_data.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 2 ?>
 ">↑</th>
<th><a href="afficher_data.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 3 ?>
 "> ↓ </a>Nom<a href="afficher_data.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 4 ?>
 ">↑</th>
<th><a href="afficher_data.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 5 ?>
 "> ↓ </a>Position<a href="afficher_data.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 6 ?>
 ">↑</th>
<th><a href="afficher_data.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 7 ?>
 "> ↓ </a>NB_like<a href="afficher_data.php?page=<?PHP echo $_GET['page']; ?>&sort=<?PHP echo $_GET['sort'] ?>
&trie=<?PHP echo 8 ?>
 ">↑</th>
 <th> image </th>
    <th>Delete</th>
 <th> Update </th>

  </tr >
</thead>
<tbody>
<?PHP
include "C:/wamp64/www/website_GYM/core/pubC.php";
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
$pub1C=new pubC();
if ($trie == 1) {
   $listePubs=$pub1C->afficherPub_trie_id_D($page1,$pa);
}

elseif ($trie ==2) {
   $listePubs=$pub1C->afficherPub_trie_id_C($page1,$pa);
}
elseif ($trie ==3) {
   $listePubs=$pub1C->afficherPub_trie_nom_D($page1,$pa);
}
elseif ($trie ==4) {
   $listePubs=$pub1C->afficherPub_trie_nom_C($page1,$pa);
}
elseif ($trie ==5) {
   $listePubs=$pub1C->afficherPub_trie_pos_D($page1,$pa);
}
elseif ($trie ==6) {
   $listePubs=$pub1C->afficherPub_trie_pos_C($page1,$pa);
}
elseif ($trie ==7) {
   $listePubs=$pub1C->afficherPub_trie_nb_D($page1,$pa);
}
elseif ($trie ==8) {
   $listePubs=$pub1C->afficherPub_trie_nb_C($page1,$pa);
}
elseif ($trie ==10) {
   $listePubs=$pub1C->afficherPub_trie_idnom($page1,$pa);
}
elseif ($trie ==11) {
   $listePubs=$pub1C->afficherPub_trie_nompos($page1,$pa);
}
elseif ($trie ==12) {
   $listePubs=$pub1C->afficherPub_trie_nbid($page1,$pa);
}
elseif (!empty($_POST['valueToSearch'])) {
   $listePubs=$pub1C->afficherPub_search($_POST['valueToSearch']);
}
else
$listePubs=$pub1C->afficherPub($page1,$pa);

?>

<?PHP
foreach($listePubs as $row){
    ?>
    <tr class="text-center">
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['pos']; ?></td>
    <td><?PHP echo $row['nb']; ?></td>
    <td>
      <?php
  $imageFileType = strtolower(pathinfo($row['im'],PATHINFO_EXTENSION));

  $extensions_arr = array("mp4");
 if( !in_array($imageFileType,$extensions_arr) ) 
      {?>
       
    	<img hight="800px" width="400px" src='crud_pub/<?php echo $row['im']; ?>' >
<?php
}
else
  {echo "video";}
?>
    </td>
        <td><form  action="crud_pub/supprimer_pub.php">
            <button class="btn-danger btn" type="submit" name="supprimer" value="supprimer"><i class="fa fa-ban"></i> Delete </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
   <input type="hidden" value="<?PHP echo $trie; ?>" name="pa2">
   <input type="hidden" value="<?PHP echo $page; ?>" name="pa1">
   <input type="hidden" value="<?PHP echo $pa; ?>" name="pa">
    </form>
</td>
        <td><form action="crud_pub/modifierPub.php">
            <button class="btn btn-success"" type="submit" name="supprimer" value="supprimer"><i class="fa fa-dot-circle-o"></i> Update </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    <input type="hidden" value="<?PHP echo $row['im']; ?>" name="imageee">
       <input type="hidden" value="<?PHP echo $trie; ?>" name="pa2">
   <input type="hidden" value="<?PHP echo $page; ?>" name="pa1">
   <input type="hidden" value="<?PHP echo $pa; ?>" name="pa">
    </form>
    </td>
    </tr>
    <?PHP
}
?>
</tbody>
</table>

<div id="wiou1">
<?PHP
if (isset($_POST['search'])) 
{
 
 
 if ($_POST['valueToSearch']=="") 
 {$count=$pub1C->row_count_Pub();

$count =ceil($count/$pa);
      echo "<br>";
?>
<a id="page" class="btn btn-success" href="afficher_data.php?page=<?PHP echo 1; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo"Debut";?></a>
<?PHP
for ($i=1; $i <=$count ; $i++) { 
    ?><a id="page" class="btn btn-success"href="afficher_data.php?page=<?PHP echo $i; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo $i;?></a>
      

   

    <?PHP
}
?>
<a class="btn btn-success" href="afficher_data.php?page=<?PHP echo $count; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo" fin";?></a>
<br>

 <?PHP

    }   
}

else
{
 $count=$pub1C->row_count_Pub();

$count =ceil($count/$pa);

echo "<br>";
?>

<a id="page" style="" class="btn btn-success" href="afficher_data.php?page=<?PHP echo 1; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo"Debut";?></a>
<?PHP
for ($i=1; $i <=$count ; $i++) { 
    ?><a id="page" class="btn btn-success"href="afficher_data.php?page=<?PHP echo $i; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo $i;?></a>
      

   

    <?PHP
}
?>
<a class="btn btn-success" href="afficher_data.php?page=<?PHP echo $count; ?>&sort=<?PHP echo $_GET['sort'] ?>&trie=<?PHP echo $_GET['trie'] ?>"><?PHP echo" fin";?></a>
<br>

  <?PHP  
}
?>
</div>
<br>
<a class="btn btn-success" href="crud_pub/supprimer_tout.php">Delete All</a>
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
        $(document).ready( function () {
    $('#datatables').DataTable({
        "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]]
    });
} );
    </script>
        <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables1').DataTable({
        "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]]
    });
} );
    </script>
           <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables3').DataTable({
        "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]]
    });
} );
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

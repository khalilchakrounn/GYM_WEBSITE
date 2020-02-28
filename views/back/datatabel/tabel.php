<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Data Table</title>
    <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="datatabel/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatabel/media/css/jquery.dataTables.min.css">



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
    
    <link href="dataTables/datatables.min.css" rel="stylesheet">
 
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="veriferChamps_Pub.js"></script>




</head>
<body>

	<div class="container">
	<div class="col-lg-12">
        <br>
         <div class="card-header bg-dark">
 <h1 class="text-white text-center" >  Table DATA Pub </h1>
 </div>
 <br>
  <div class="col-lg-2 m-auto">
    <form action="../afficher_data.php">
 <button class="btn btn-success" type="submit" name="done"> Return to tabs </button><br>
 </form>
 </div>  
    <table id="datatables" class=" table table-striped table-hover table-bordered">
 <thead>
    <br><br>
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Nom </th>
 <th> Position </th>
 <th> image </th>
  <th> NB_like</th>
   <th> Delete </th>
 <th> Update </th>

  </tr >
</thead>
<tbody>
<?PHP
include "C:/wamp64/www/crud/core/pubC.php";
$pub1C=new pubC();
$listePubs=$pub1C->afficherPub();
?>

<?PHP
foreach($listePubs as $row){
    ?>
    <tr class="text-center">
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['pos']; ?></td>

    <td><img hight="400px" width="200px" src='../<?php echo $row['im']; ?>' ></td>
    <td><?PHP echo $row['nb']; ?></td>
    <td><form method="POST" action="../supprimer.php">
            <button class="btn-danger btn" type="submit" name="supprimer" value="supprimer"><i class="fa fa-ban"></i> Delete </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
</td>
        <td><form action="../modifierPub.php">
            <button class="btn btn-success"" type="submit" name="supprimer" value="supprimer"><i class="fa fa-dot-circle-o"></i> Update </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </td>
    

    </tr>
    <?PHP
}
?>
</tbody>
</table>

</div>
</div>

<br><br>

    <div class="container">
    <div class="col-lg-12">
        <br>
         <div class="card-header bg-dark">
 <h1 class="text-white text-center" >  Table DATA Pub </h1>
 </div>
 
    <table id="datatables1" class=" table table-striped table-hover table-bordered">
 <thead>
    <br><br>
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Nom </th>
 <th> idp </th>
 <th> pourcentage </th>
   <th> Delete </th>
 <th> Update </th>

  </tr >
</thead>
<?php
$connect = mysqli_connect("localhost", "root", "", "crud");
$query = "SELECT * FROM promo";
 $result = mysqli_query($connect, $query);
?>



<?PHP
 while($row = mysqli_fetch_array($result))
 {  ?>
    <tr class="text-center">
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['idp']; ?></td>
    <td><?PHP echo $row['pour']; ?></td>
    <td><form method="POST" action="../supprimerPromo.php">
            <button class="btn-danger btn" type="submit" name="supprimer" value="supprimer"><i class="fa fa-ban"></i> Delete </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    <input type="hidden" value="<?PHP echo $row['idp']; ?>" name="idp">
    </form>
</td>
        <td><form action="../modifierPromo.php">
            <button class="btn btn-success"" type="submit" name="supprimer" value="supprimer"><i class="fa fa-dot-circle-o"></i> Update </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </td>
    
    </tr>


    <?PHP
}
?>



</table>

</div>
</div>



 
 <br><br>
    <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables').DataTable();
} );
    </script>
        <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables1').DataTable();
} );
    </script>
</body>
</html>
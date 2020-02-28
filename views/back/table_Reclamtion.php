<?php  

 include "../../core/reclamations.php";

   $recl=new reclamations();

$result = $recl->AFFRecl();

?>
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
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
    
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     


</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
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
<style>
    #search_text{
 width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('images/serc.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

.container{
  margin: 20px auto;
}
h2 {
  text-align: center;
}
input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

body{
  font-family:Arial, Helvetica, sans-serif;
  font-size:13px;
}
.success, .error{
  border: 1px solid;
  margin: 10px 0px;
  padding:15px 10px 15px 50px;
  background-repeat: no-repeat;
  background-position: 10px center;
}

.success {
  color: #4F8A10;
  background-color: #DFF2BF;
  background-image:url('success.png');
  display: none;
}
.error {
  display: none;
  color: #D8000C;
  background-color: #FFBABA;
  background-image: url('error.png');
}
</style>
</head>

<body class="animsition">
    <div class="page-wrapper">
 <?php 
include 'head.php'
?>
           
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
  
    <div class="container">  
   
       
                <div class="input-group">
                    

                    <input type="text"   
                    name="search_text" id="search_text" placeholder="Search By ID_reclamation,ID_Client,Username,Type or Etat " class="form-control" />
                </div>
            <div class="table-responsive">  
                
                <span id="result"></span>
                <div id="live_data"></div>                 
            </div>  
        </div>
  <button type="button" name="Client"  id="Client" class="btn btn-block btn-info"><span class="glyphicon glyphicon-tasks"></span>  AFFICHER CLIENTS</a></button>
                        </div>



                    </div>
                    <br>
<br>

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
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script >

 
 $(document).ready(function(){
  
   
    function load_data(query)
    {
        $.ajax({
            url:"../../core/select_recl.php",
            method:"post",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
        });
    }
   
load_data();
    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
          load_data();            
        }
    });


    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"../../core/delete_reclamation.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                     location.reload();  
                }  
            });  
        }  
    });  

 $(document).on('click', '#btn_disable', function(){  
    var id=$(this).data("id9");  
        if(confirm("Are you sure ?"))  
        {  
            $.ajax({  
            url:"../../core/disable_recl.php",  
            method:"POST",  
             data:{id:id },    
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                setTimeout(function(){ 
    $('#result').hide();
      location.reload();
}, 1000);   
               
            }  

        })
        }
});  
 $(document).on('click', '#btn_enable', function(){  
    var id=$(this).data("id9");  
        if(confirm("Are you sure ?"))  
        {  
            $.ajax({  
            url:"../../core/enable_recl.php",  
            method:"POST",  
             data:{id:id },    
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                setTimeout(function(){ 
    $('#result').hide();
      location.reload();
}, 1000);   
                fetch_data();  
            }  

        })
        }
});  
}); 

  $(document).on('click', '#Client', function(){  

  window.location.replace("table_Client.php");


    });
</script>
</body>

</html>
<!-- end document-->

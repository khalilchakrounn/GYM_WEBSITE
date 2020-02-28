

<?PHP
require  "../core/Clients.php";
?>
<!DOCTYPE html >

<html>
<head>
	   <script src="scrip.js"></script>
 <link rel="stylesheet" href="styl.css">
   <script src="js/bootbox.all.js"></script>
      <script src="js/bootbox.all.min"></script>
         <script src="js/bootbox"></script>
            <script src="js/bootbox.locales"></script>
               <script src="js/bootbox.locales.min"></script>
                  <script src="js/bootbox.min"></script>
</head>
<body >
	

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	     <a  href="index.html"><img style="position: absolute;  right: 85% ; top:0px" width="100" height="100" src="images\logo.png" > </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav" style="background-image: url('');position:  right: 12%"><br><br><br>
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="program.php" class="nav-link">Program</a></li>
	          <li class="nav-item "><a href="coaches.php" class="nav-link">Coaches</a></li>
	          <li class="nav-item"><a href="schedule.php" class="nav-link">Schedule</a></li>
	          <li class="nav-item"><a href="produits.php" class="nav-link">Produits</a></li>
	            <li class="nav-item"><a href="abonements.php" class="nav-link">Abonements</a></li>
	           
	         
	          <?php

	          if(!isset( $_SESSION['l']))     
	          {
	          		?>
	          	         <li class="nav-item"><a href="Inscription.php" class="nav-link">Inscription</a></li>

	          	         <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>


	         <?php 
	     }else {

?>					
				<!--li class="nav-item"><a href="affichage_wishlist.php" class="nav-link">Whishlist</a></li-->
 					<li class="nav-item"><a href="reclamation.php" class="nav-link">Reclamation</a></li>
 					
 					      <?PHP
        
            $client=new Clients();
$info=$client->afficherClient($_SESSION['l'],$_SESSION['p']);

foreach($info as $row){
  ?> 
<div id='cssmenu' style="top: -12px;">

<ul >

   <li class='active '><a href='#'>

   	<img class="pad" id="output" style="  height:50px  ;width:50px ;   border-radius:80px;   " alt="" /></a>
   	  
      <ul>
      		  <p><?PHP  echo  $row['USERNAME']; ?></p>


	  
         <li ><a href='page profil.php'><span>Profil</span></a>
         </li>
            <li ><a href="../core/logout.php"><span>Logout</span></a>
         </li>
       
      </ul>
   </li>

</ul>
    <?php   } }
	           ?>
</div>
	 


    	
	          
	           <li style="list-style-type:none;" class="main-nav-list"><a href="panier.php" class="nav-link"><img  src="images\icons\panier1.png" style="width:40px "></a></li>
	         </ul>
       

            
	      </div>

		  </div>
	  </nav>
<?php

?>
<script type="text/javascript">
  
         function previewFile(){
       var preview = document.getElementById('output');
     

           preview.src = "./uploades/medium/<?PHP echo $row['IMAGE']; ?>";
       }

 previewFile(); 



</script>
<script >
	 $('#clickable_div').mouseover( function(){
    $('#nav_menu').slideDown();
})
$('#wrap').mouseleave( function(){
    $('#nav_menu').slideUp();
});
</script>
</body>
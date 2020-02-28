<?PHP
require  "../core/Clients.php";

?>
<!DOCTYPE html>
<html>
<head>
	<style>
/* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  
 background-color: rgba(0, 0, 0, .5);
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: linear-gradient(#E73075, #F93415); 
 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(#BD0958, #F93415);  

}
</style>
	<script src="scrip.js"></script>
	<link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="css/style.css">
<style type="text/css">

#walid{
width: 160px;
border-radius: 2px;
font-size: 14px;

}
#walid1:hover{


}

a{  
	
	text-align: center;
	font-size: 16px;
	font-family: "Arial Black";
	
	color: #A9A7A6;
}

a:hover {
  color:crimson;
}



.menu-toggle{
	position: fixed;
	top: 2.5rem;
	right: 2.5rem;
	color: #351B1B;
	font-size: 3rem;
	cursor: pointer;
	z-index: 1000;
	display: none;
}

nav{
	padding-top: 5rem;
	display: flex;
	justify-content: space-between;
	align-items: center;
	text-transform: uppercase;
	font-size: 1.6rem;
}











nav ul li a::before,
nav ul li a::after{
	content: '';
	position: absolute;
	width: 100%;
	height: 2px;
	background-color: crimson;
	left: 0;
	transform: scaleX(0);
	transition: all .5s;
}

nav ul li a::before{
	top: 0;
	transform-origin: left;
}

nav ul li a::after{
	bottom: 0;
	transform-origin: right;
}



nav ul li a:hover::before,
nav ul li a:hover::after{
	transform: scaleX(1);
}

@keyframes slideIn {
	from{

	}
	to{
		transform: translateX(0);
	}
}

@media screen and (max-width: 700px){


	

	
  
}
</style>
</head>
<body>


<header>
        
        
        
            
           
                    
                  
                 <?php

	          if(!isset( $_SESSION['l']))     
	          {
	          		?><nav class="navbar navbar-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
 <ul  ><li><a  href=""></a></li></ul>
<ul>
                    <li><a   href="index.php">accueil</a></li>
                    
                </ul>
                <ul> <li><a href="abonements.php">abonnements</a></li>
                    
                </ul>
                <ul>
                    <li><a href="program.php">programme</a></li>
                    
                </ul>
                
                  <ul><li><a href="index.php"><img width="120px" style="position: relative; right: -12%; top: 10px;" src="1.png"></a></li>
                    
                </ul>
                 
                 <ul> <li><a href="produits.php">produits</a></li>
                    
                </ul>

                 <ul> <li><a href="Inscription.php">inscription</a></li>
                    
                </ul>

                 <ul> <li><a id="walid"   class="btn btn-primary "  href="login.php">se connecter</a></li>
                    
                </ul>
                <ul><li><a href="panier.php"><img width="65px" width="65px"  src="images/icons/panier.png"></a></li></ul>
            </nav>
                   <?php 
	     }

	     else {
	     	?>	
	     	<nav class="navbar navbar-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
	     	    <ul>
                    <li><a   href="#"></a></li>
                    
                </ul>
                 <ul>
                    <li><a   href="#"></a></li>
                    
                </ul>
	     	      <ul>
                    <li><a   href="index.php">accueil</a></li>
                    
                </ul>
                <ul  ><li><a  href=""></a></li></ul>

                <ul> <li><a href="abonements.php">abonnements</a></li>
                    
                </ul>
                <ul  ><li><a  href=""></a></li></ul>
                <ul>
                    <li><a style="margin-right: 50px;" href="program.php">programme </a></li>
                   
                </ul>
                
                  <ul><li><a href="index.php"><img width="120px" style="position: relative; right: 5%; top: 10px;" src="1.png"></a></li>
                    
                </ul>
               <ul  ><li><a  href=""></a></li></ul>
                 <ul> <li><a href="produits.php">produits</a></li>
                    
                </ul>
                <ul  ><li><a  href=""></a></li></ul>
                  <ul  ><li><a id="walid1" href="reclamation.php">Reclamation</a></li></ul>
                     
              
   <?PHP
        
            $client=new Clients();
$info=$client->afficherClient($_SESSION['l'],$_SESSION['p']);

foreach($info as $row){
  ?> 
<div id='cssmenu' style=" position: relative; top: -6px; right: 0px;">

<ul >

   <li class='active '><a href='#'>

   	<img class="pad" id="output" style="  height:50px  ;width:50px ;   border-radius:80px;   " alt="" /></a>
   	  
      <ul>
      		  <p><?PHP  echo  $row['USERNAME']; ?></p>


	  
         <li ><a  class="btn btn-primary " href='page profil.php'><span>Profil</span></a>
         </li>
         <br>
            <li ><a class="btn btn-primary " href="../core/logout.php"><span>Logout</span></a>
         </li>
       	   
      </ul>
   </li>

</ul>
</div>

    <?php   }?>

 <ul><li><a href="panier.php"><img width="65px" width="65px"  src="images/icons/panier.png"></a></li></ul>
                    
                
<?php
     }
	           ?>



                  
               
            </nav>
     
</header>
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
</html>
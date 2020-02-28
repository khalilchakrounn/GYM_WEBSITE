<?PHP

session_start();
	
require '_header.php';

?>

<html lang="en">
  <head>
    <title>Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/linearicons2.css">
    <link rel="stylesheet" href="css/themify-icons2.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
     
      .sale {
  position: relative;
  display: inline-block;
  background: orange;
  color: white;
  height: 40px ;
  width: 40px ;
  border-radius: 8px;
  text-align: center;
  vertical-align: top;
  line-height: 2.5rem;

  left: 80%;
  transform: rotate(-20deg);
  animation: beat 1s ease infinite alternate;
  &:before,
  &:after {
    content:"";
    position: absolute;
    background: inherit;
    height: inherit;
    width: inherit;
    top: 0;
    left: 0;
    z-index: -1;
    transform: rotate(30deg);
  }
  &:after {
    transform: rotate(60deg);
  }
}

@keyframes beat {
  from {  transform: rotate(-20deg) scale(1); }
  to {  transform: rotate(-20deg) scale(1.1); }
}


  
    
           body{
   
}


.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}}
  </style>

  <style type="text/css">
           body{
   
}


.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}}
  </style>

  </head>
  <body>
     <?php
   include'head2.php';
?>

    <!-- END nav -->
        <!-------------------------------------------------------------------------------------->
     <!-------------------------------------------------------------------------------------->
      <!-------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------->  

    <section class="hero-wrap js-fullheight" style="background-image: url('images/gallery-3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>PROFIL</span></p>
          </div>
        </div>
      </div>
    </section>
    <!-------------------------------------------------------------------------------------->
     <!-------------------------------------------------------------------------------------->
      <!-------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------->  
    <div style="background-color:">
      <br>
<br>
<br>
   <div  class="container bootstrap snippet" >
   
    <div class="row" >
      <div class="col-sm-3"><!--left col-->
     
       <div class="text-center">
         <img  id="output2" style="  height:150px  ;width:150px ;  border-radius:80px;  " src=""/>
         <br>
         <br>
         <label id="#bb" style="  padding: 10px; background: #212529b8;  display: table; color: #fff;  "> Change photo
    <input style=" display: none;" type="button" ;  id="File"  onclick="validation()" name="myImage" size="60" >
    </label> 
     
     
       
      </div><br>
    <!-------------------------------------------------------------------------------------->
     <!-------------------------------------------------------------------------------------->
      <!-------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------->  
               
     
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span style="position: absolute;  left: 8%;"><strong>Comments</strong></span> <span id="nb_Comments">5</span> </li>
            <li class="list-group-item text-right"><span style="position: absolute;  left: 8%;"><strong>Likes</strong></span> <span id="nb_likes">4</span></li>
            <li class="list-group-item text-right"><span style="position: absolute;  left: 8%;"><strong>ACHATS</strong></span> <span id="nb_achats">10</span></li>
    
          </ul> 
          <br>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li >useful links 


                <i class="fa fa-dashboard fa-1x"></i></li>
                          

                            </ul>
   
 <li  style="position: absolute; top: 660px;"><a  href="../core/logout.php">Log out</a> <br></li>
    
          
        </div><!--/col-3-->

    <!-------------------------------------------------------------------------------------->
     <!-------------------------------------------------------------------------------------->
      <!-------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------->  
         <div class="col-sm-9" >
        
         

<div id="exTab2" class="container"> 
<ul class="nav nav-tabs">
      <li class="active">
        <a  href="#1" data-toggle="tab">ABOUT</a>
      </li>
      <li><a href="#2" data-toggle="tab" style="position: relative;  left: 70%; " >SETTINGS</a>
      </li>
      <li><a href="#3" data-toggle="tab" style="position: relative;  left: -760%; top: 540px;">Claims</a>
      </li>
      <li><a href="#5" data-toggle="tab" style="position: relative;  left: 70%; " >Wishlist</a>
      </li>

        <li><a href="#6" data-toggle="tab" style="position: relative;  left: 85%; " >My Orders</a>
      </li>
        <li><a href="#4" data-toggle="tab" style="position: relative;  left: -360%; top: 585px; ">CHANGE PASSWORD  <br>
          <br>
          <br></a>
      </li>
    </ul>

      <div  class="tab-content profile-tab">
        <div class="tab-pane active" id="1">
          <br>
          <br>
          <br>
           <?PHP
        
            $client=new Clients();
$info=$client->afficherClient($_SESSION['l'],$_SESSION['p']);

foreach($info as $row){

  ?> 
<script type="text/javascript">
  
         function previewFile2(){
       var preview = document.getElementById('output2');
     

           preview.src = "./uploades/medium/<?PHP echo $row['IMAGE']; ?>";
       }

 previewFile2(); 
</script>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['USERNAME']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Fullname</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['Firstname']; ?> <?PHP echo $row['Lastname']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['EMAIL']; ?></p>
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <label>Adresse</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['adresse']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birthday</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['BIRTHDAY']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['mobile']; ?></p>
                                            </div>
                                        </div>

                                        <?PHP
                                       
                                     }
                                       ?>
        </div>
        <div class="tab-pane" id="2">
           <br>
          <br>
          
         <?PHP
        
foreach($info as $row){ }

  ?>                          

    <br>
  <form class="form"  id="update_form" method="POST" action="../core/ModifierClient.php" >
                     <div class="form-group">
                          <div class="col-xs-6">
                             <label for="user"><h4>USERNAME</h4></label>
                               <input type="text" class="form-control" name="uname" id="user" value="<?PHP echo $row['USERNAME']; ?>" required title="enter your mobile number if any.">
                          </div>
                          <span class="check_ok" style="color:#149541; font-size:1em;"></span>
      <span class="check_false"  style="color:#F55 ; font-size:1em;"></span>
        
          
                      </div>
                 
              <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" value="<?PHP echo $row['EMAIL']; ?>"  required title="enter your email.">
                               <span class="check_ok1" style="color:#149541; font-size:1em;"></span>
      <span class="check_false1"  style="color:#F55 ; font-size:1em;"></span>
        
                              
                          </div>
                        
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" value="<?PHP echo $row['mobile']; ?>" required title="enter your mobile number if any.">
                               <span class="check_ok2" style="color:#149541; font-size:1em;"></span>
      <span class="check_false2"  style="color:#F55 ; font-size:1em;"></span>
                          </div>
                          
                      </div>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="text"><h4>Location</h4></label>
                              <input type="text" class="form-control" id="location" name="location" value="<?PHP echo $row['adresse']; ?>" required title="enter an adress">
                          </div>
                           <span id=adresseinc></span>
                      </div>
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button name="btn_contact_details" id="btn_contact_details" class="btn btn-lg btn-success" id="save">
                Save
              </button>

                            </div>
                      </div>
                </form> 
        </div>

    <div class="tab-pane" id="5">
       
   

         <?PHP


include "../core/wishlistC.php";
$wC=new WishlistC();
$listew=$wC->afficher_wishlist($_SESSION['ID']);

?>

  <div class="container">
    <div class="row">
    

    <div class="col-xl-9 col-lg-8 col-md-7">

        <table class="lattest-product-area pb-40 category-list" id="example" width="">
        <tbody>
                      <?php
                                            foreach($listew as $row){ 
                                            ?>
                                            <br><br>  
                                            <?php 
        if($row['etat']=="false"){
        ?>  
            <tr>
              <td><img src='<?php echo $row['image']; ?>' width="200" height="250" >
                <br><br></td>

              <td>
              <div class="single-product">  
                <div class="product-details">
                  <h6><?PHP echo $row['nom']; ?></h6>
                  <div class="price"><h6>prix: <?PHP echo $row['prix']; ?> dt</h6></div>  
                </div>
              </div>                  
              </td>
              <td width="20%"></td>
              <td width="9%">               
                      <a href="ajouterPanier.php?id=<?php echo $row['id']?>"
                     class="social-info" >
                      <img class="img-fluid" src="images/pan.png" >                     
                      </a>
                    <td width="9%">
                    <a href="produit_detail.php?id=<?php echo $row['id'];?>" class="social-info">
                      <img class="img-fluid" src="images/det.png" >                     
                    </a>
                    <td width="9%">
                    <a href="supp_wishlist.php?delete=<?php echo $row['id'];?>">
                                            <img class="img-fluid" src="images/del.png" > </a>
                                   </td> 
                                   </td>                  
              </td>
                  
          </tr>
          <?php   }
        else{
          $pour= (($row['prix']-$row['prix_promo'])/$row['prix'])*100;
        ?>
  <tr>
              <td><span class="sale">-<?PHP echo $pour ?>%</span><img src='<?php echo $row['image']; ?>' width="200" height="250" >
                <br><br></td>

              <td>
              <div class="single-product">  
                <div class="product-details">
                  <h6><?PHP echo $row['nom']; ?></h6>
                  <div class="price" >
                    <h6> PRIX Promo: <?PHP echo $row['prix_promo']; ?> <?PHP echo "$";?></h6>
                  <br>
                  <h6>PRIX: </h6><h6 class="l-through"><?PHP echo $row['prix']; ?> <?PHP echo "$";?></h6>
                  
          
                    </div>
                </div>
              </div>                  
              </td>
              <td width="20%"></td>
              <td width="9%">               
                       <a href="ajouterPanier.php?id=<?php echo $row['id']?>"
                    class="addPanier" >
                      <img class="img-fluid" src="images/pan.png" ></a>
                    <td width="9%">
                    <a href="produit_detail.php?id=<?php echo $row['id'];?>" class="social-info">
                      <img class="img-fluid" src="images/det.png" >                     
                    </a>
                    <td width="9%">
                    <a href="supp_wishlist.php?delete=<?php echo $row['id'];?>">
                                            <img class="img-fluid" src="images/del.png" > </a>
                                   </td> 
                                   </td>                  
              </td>
                  
          </tr>



          <?php
          } }
          ?>


        </tbody>
        </table>      
    </div>
  </div>
</div>





        </div>




    <div class="tab-pane" id="6">
       
   
 <div class="cart-table-warp">
              
               <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>nom et prenom</th>                                                
                                                <th>produit commandé</th>
                                                <th>quantite</th>
                                                <th>prix</th>
                                               
                                                <th>adresse</th>
                                                <th>mode livraison</th>
                                                <th>mode paiement</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <?PHP
include "C:/wamp64/www/website_GYM/core/commandeC.php";
include "C:/wamp64/www/website_GYM/core/factureC.php";
    $client=new Clients();
$info=$client->afficherClient($_SESSION['l'],$_SESSION['p']);
foreach($info as $row){ 
  $nom_prenom=$row['Firstname'].' '.$row['Lastname'];
}

$commande1C=new commandeC();
$listecommandes=$commande1C->recupererCommandenom($nom_prenom);

foreach($listecommandes as $row){
    ?>                 
                                        <tbody> 

                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                
                                                <td>
                                                   <?PHP echo $row['nom_prenom']; ?> 
                                                </td>
                                                <td><?PHP echo $row['nom_prod']; ?></td>
                                                   
                                                <td>
                                                    <?PHP echo $row['quantite']; ?>
                                                </td>
                                                <td><?PHP echo $row['prix']; ?></td>
                                                    
                                                
                                               <td>
                                                   <?PHP echo $row['adresse']; ?>
                                                </td>
                                             
                                                <td>
                                                    <?PHP echo $row['mode_livraison']; ?>
                                                </td>
                                                <td>
                                                    
                                                        <?PHP echo $row['mode_paiement']; ?>
                                                    
                                                </td></form>
                                                <td>
                                                  <form action="PDF/html2pdf/examples/index.php" method="POST">
                                                    <button ><image src="images/icons/download.png" style="width:40px">
                                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                       </button>
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






        <div class="tab-pane" id="3">
           <div class="row">
               <div class="col-md-6">
               	
                                                <label>total number of claims</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP $nbr=$client->NombreReclamation($_SESSION['ID']); ?></p>
                                            </div>
                                        </div>
                                           <div class="row">
                                            <div class="col-md-6">
                                                <label>total number of untreated claims</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP $nbr=$client->NombreReclamation_tr($_SESSION['ID']); ?></p>
                                            </div>
                                        </div>
        </div>
         <div class="tab-pane" id="4"> 
          <span id="res" ></span>
          <form class="form"  id="change" method="POST" action="../core/ModifierMDP.php" >
             <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>PASSWORD</h4></label>
                              <input type="password" class="form-control" name="password" id="PASSWORD"   >
                               <span class="check_ok2" style="color:#149541; font-size:1em;"></span>
      <span class="check_false2"  style="color:#F55 ; font-size:1em;"></span>
                          </div>
                           <div class="col-xs-6">
                             <label for="mobile"><h4>VERIFY PASSWORD</h4></label>
                              <input type="password" class="form-control" name="pass2" id="pass2"  >
                               <span class="check_ok2" style="color:#149541; font-size:1em;"></span>
      <span class="check_false2"  style="color:#F55 ; font-size:1em;"></span>
                          </div>
                              <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button name="modif" id="modif" class="btn btn-lg btn-success" >
                Save
              </button>
                         
                            </div>
                      </div>
                          
                      </div>
                    </form>
        </div>
      </div>
      
      </div>
  </div>

<hr></hr>

  </div>


<!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <!-------------------------------------------------------------------------------------->
     <!-------------------------------------------------------------------------------------->
      <!-------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------->  
               
                  

</div>
</div>
<br>
<br>
<br>
</div>

</div>


</div>
<br>
<br>
<br>
<br>
</image>
</button>
</form>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php 
include "footer.php"
?>
    <!-------------------------------------------------------------------------------------->
     <!-------------------------------------------------------------------------------------->
      <!-------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------->  
            <!-------------------------------------------------------------------------------------->
     <!-------------------------------------------------------------------------------------->
      <!-------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------->  
    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


    <!-------------------------------------------------------------------------------------->
     <!-------------------------------------------------------------------------------------->
      <!-------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------->  





  <script type="text/javascript" src="app.js"> </script>


<script src="js/profil.js"></script>


<script >
 var formValid = document.getElementById('modif');
           

            var pass= document.getElementById('PASSWORD');
            var pass2=document.getElementById('pass2');
          
            formValid.addEventListener('click', validation);
            

            function validation(event){
            
 if (pass.value=='' || pass2.value=='')
{
 event.preventDefault();
 $("#res").html("<p>password cannot be empty </p>");
}
else if(pass.value!=pass2.value)
{
 event.preventDefault();
 $("#res").html("<p>password are not identical </p>");
}




}
</script>



 <script>
  function validation() {
window.open('image.php?mavar=change photo','Change photo','width=300, height=300');
}
</script>


     

  </body>
</html>
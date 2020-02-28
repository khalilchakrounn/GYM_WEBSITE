
<?php
//index.php


$connect = mysqli_connect("localhost", "root", "", "site_web");
function make_query($connect)
{
 $query = "SELECT * FROM pub where pos =1";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_query2($connect)
{
 $query = "SELECT * FROM pub where pos =2";
 $result = mysqli_query($connect, $query);
 return $result;
}
function make_query3($connect)
{
 $query = "SELECT * FROM pub where pos =3";
 $result = mysqli_query($connect, $query);
 return $result;
}
function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '         
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
 

   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  if(!empty( $_SESSION['l'])) 
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
<form method="POST" action="nblike.php" target="_self">
  <button class="btn btn-primary btn-sm" id="butt" type="submit" name="done"> Like </button>
 
      <input type="hidden" value="'.$row["id"].'" name ="id" >
</form>
  </div>
  ';}
  else
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
  </div>
  ';

  }
  $count = $count + 1;
 }
 return $output;
}
function make_slides2($connect)
{
 $output = '';
 $count = 0;
 $result = make_query2($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
    if(!empty( $_SESSION['l'])) 
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
<form method="POST" action="nblike.php">
  <button class="btn btn-primary btn-sm" id="butt" type="submit" name="done"> Like </button>
 
      <input type="hidden" value="'.$row["id"].'" name ="id" >
</form>
  </div>
  ';}
  else
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
  </div>
  ';}
  $count = $count + 1;
 }
 return $output;
}

function make_slides3($connect)
{
 $output = '';
 $count = 0;
 $result = make_query3($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
      if(!empty( $_SESSION['l'])) 
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
<form method="POST" action="nblike.php">
  <button class="btn btn-primary btn-sm" id="butt" type="submit" name="done"> Like </button>

      <input type="hidden" value="'.$row["id"].'" name ="id" >
</form>
  </div>
  ';}
  else
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
  </div>
  ';}
  $count = $count + 1;
 }
 return $output;
}
function pub_pos1()
{

 $hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "site_web";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM pub where pos =1";
$result1 = mysqli_query($connect, $query);
$rowcount=mysqli_num_rows($result1);
if ($rowcount > 0) {
  ?> 
<div id="pop">

<button id="close "  class="btn-danger btn" onclick="document.getElementById('pop').style.display='none'">x</button>
  PUB
   <br>

   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

 
  </div>

</div>
<?php
}


}



function pub_pos2()
{

 $hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "site_web";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM pub where pos =2";
$result1 = mysqli_query($connect, $query);
$rowcount=mysqli_num_rows($result1);
if ($rowcount > 0) {
  ?> 
<div id="pop2">

<button id="close "  class="btn-danger btn" onclick="document.getElementById('pop2').style.display='none'">x</button>
  PUB
   <br>
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
     <?php echo make_slides2($connect); ?>
    </div>
  </div>
</div>
<?php
}


}
function pub_pos3()
{

 $hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "site_web";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM pub where pos =3";
$result1 = mysqli_query($connect, $query);
$rowcount=mysqli_num_rows($result1);
if ($rowcount > 0) {
  ?> 
<div id="pop3">

<button id="close "  class="btn-danger btn" onclick="document.getElementById('pop3').style.display='none'">x</button>
  PUB
   <br>
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
     <?php echo make_slides3($connect); ?>
    </div>
   
  </div>
</div>
<br>
<?php
}


}
?>
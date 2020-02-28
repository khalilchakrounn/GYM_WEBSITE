<!DOCTYPE html>
<HTML>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="verif_modif.js"></script>
</head>
<form method="POST" action="mail_php.php" enctype='multipart/form-data'>

<div class="col-lg-6 m-auto">
 <br>
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Mail </h1>
 </div>

  <div class="col-12 col-md-9">
    <label> subject: </label>
    <input type="text" id="subject" name="subject"  class="form-control"> 
  </div>

 <div class="col-12 col-md-9">
      <label> destination: </label>
       <select name="dest" id="im"  class="form-control">
       <option value="abdelhamid.jazi@esprit.tn">abdelhamid.jazi@esprit.tn</option>

       </select>  
 </div>
        <br>  
<div class="col-12 col-md-9">
      <label> contenu: </label>
       <textarea name="cont" id="mini-descript_input" rows="4" placeholder="Contenu..." class="form-control"></textarea>
       
 </div>
 <br>
   <div class="card-footer">
  <button class="btn btn-primary btn-sm" type="submit" name="modifier" onclick="verif()" value="modifier" ><i class="fa fa-dot-circle-o"></i> Submit </button>
 
  
  </div>
  
</form>
</div>
</div>
</body>
</HTMl>
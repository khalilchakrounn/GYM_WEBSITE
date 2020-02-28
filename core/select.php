<?php  
 include('header.php');
include "Clients.php";
         $client=new Clients();
 $output = '';  

 if(isset($_POST["query"]))
{
  
$result =$client->REChClient($_POST["query"]);
}
else
{
$result =$client->AFFClient();
}

 $output .= '  
      <div class="table-responsive">  
      <span class="error" id="lblError"></span>
           <table id="client_data" class="table table-striped ">  
          
                <tr>  
                  
                     <th width="10%">Id Client</th>  
                     <th width="11%">Username</th>
                     <th width="11%">Status</th>
                  
                     <th width="11%">First Name</th>  
                     <th width="11%">Last Name</th>  
                     <th width="11%">EMAIL</th>  
                     <th width="11%">Birthday</th>  
                     <th width="11%">Adresse</th> 
                      <th width="11%">Mobile</th> 
                     <th width="10%">Action</th>  
                     <th width="10%">Disable/Enable    </th> 
                      
                </tr>';  


      while($row = $result->fetch()  )  
      {  
          
           
         
           $output .= '  
                <tr>  

                     <td>'.$row["ID_CLIENT"].'</td>  
                       <td class="username" data-id0="'.$row["ID_CLIENT"].'" >'.$row["USERNAME"].'</td> 
                     <td class="first_name" data-id7="'.$row["ID_CLIENT"].'" >'.$row["status"].'</td>  
                     <td class="last_name" data-id1="'.$row["ID_CLIENT"].'" >'.$row["Firstname"].'</td>
                     <td class="last_name" data-id2="'.$row["ID_CLIENT"].'" >'.$row["Lastname"].'</td>
                      <td class="email" data-id7="'.$row["ID_CLIENT"].'" contenteditable>'.$row["EMAIL"].'</td>
                      <td class="Birthday" data-id4=" '.$row["ID_CLIENT"].'" >'.$row["BIRTHDAY"].'</td>  
                      <td class="Adresse" data-id5="'.$row["ID_CLIENT"].'" contenteditable>'.$row["adresse"].'</td>  
                      <td class="Mobile" data-id6="'.$row["ID_CLIENT"].'" contenteditable>'.$row["mobile"].'</td>  
                
                    <td><button type="button" name="delete_btn" data-id3="'.$row["ID_CLIENT"].'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-trash"></span> Delete</a></button></td> 
                     
                <td>
  <button type="button" name="btn_enable" data-id9="'.$row["ID_CLIENT"].'" id="btn_enable" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span>  enable</a></button>
                <button type="button" name="btn_disable" data-id9="'.$row["ID_CLIENT"].'" id="btn_disable" class="btn btn-warning"><span class="glyphicon glyphicon-off"></span>Disable</a></button> 
               </td> 
            
  
           
           
            
               

                </tr>  
           ';  
      }  
    
  $nb_ligne = $result->rowCount();
        echo  $nb_ligne ; echo "  Clients Found";
      $output .= '  
           <tr>  
                <td></td>  
                <td></td>
                <td id="username" ></td> 
                <td id="first_name" contenteditable></td>  

                <td id="last_name" contenteditable></td> 
                  <td id="Email" contenteditable></td> 
                  <span class="check_ok2" style="color:#149541; font-size:1em;"></span>
      <span class="check_false2"  style="color:#F55 ; font-size:1em;"></span>
                 <td id="Birthday"  ></td>
                  <td id="Adresse" contenteditable></td>
                   <td id="Mobile" contenteditable></td>
<span class="check_ok1" style="color:#149541; font-size:1em;"></span>
      <span class="check_false1"  style="color:#F55 ; font-size:1em;"></span>
                <td><button type="button" name="btn_add" id="btn_add"  class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> ADD NEW </a> </button></td> 
                
           </tr>  
      ';  
  

 

 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
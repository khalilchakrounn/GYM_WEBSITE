<?php  
 include('header.php');
 include "reclamations.php";
$output = '';  
   $recl=new reclamations();
if(isset($_POST["query"]))
{
  
$result = $recl->REChRecl($_POST["query"]);
}
else
{
$result = $recl->AFFRecl();
}

 $output .= '  
      <div class="table-responsive">  
           <table id="client_data" class="table table-striped ">  
          
                <tr>  
                    <th width="10%">Id Reclamtion</th>  
                   <th width="11%">Status</th>
                    <th width="10%">Type</th>  
                     <th width="10%">Contenu</th>  
                     <th width="10%">Image</th>  
                     <th width="10%">Id Client</th>  
                     <th width="11%">Username</th>
                 
                     <th width="10%">Action</th>  
                     <th width="10%">Disable/Enable    </th> 
                </tr>';  
  while($row = $result->fetch()  )  
      {  
           $output .= '  
                <tr>  

                     <td>'.$row["Id_reclamation"].'</td>  
                       <td class="username" data-id0="'.$row["Id_reclamation"].'" >'.$row["ETAT"].'</td> 
                     <td class="first_name" data-id7="'.$row["Id_reclamation"].'" >'.$row["TYPE"].'</td>  
                     <td class="last_name" data-id1="'.$row["Id_reclamation"].'" >'.$row["CONTENU"].'</td>
                     <td class="last_name" data-id2="'.$row["Id_reclamation"].'" >'.$row["IMAGE"].'</td>
                      <td class="email" data-id7="'.$row["Id_reclamation"].'" contenteditable>'.$row["ID_client"].'</td>
                      <td class="Birthday" data-id4=" type"date"'.$row["Id_reclamation"].'" >'.$row["Username"].'</td>  
                     
                      
                
                    <td><button type="button" name="delete_btn" data-id3="'.$row["Id_reclamation"].'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-trash"></span> Delete</a></button></td> 
                     
                <td>
  <button type="button" name="btn_enable" data-id9="'.$row["Id_reclamation"].'" id="btn_enable" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span>  Mark as read</a></button>
                <button type="button" name="btn_disable" data-id9="'.$row["Id_reclamation"].'" id="btn_disable" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle"></span>Mark as not read</a></button> 
               </td> 
                  

                </tr>  
           ';  
      }  
       $nb_ligne = $result->rowCount();
        echo  $nb_ligne ; echo "  Reclamtion Found";
      
  
 
 
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
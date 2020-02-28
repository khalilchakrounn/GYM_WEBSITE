<?php 

include "C:/wamp/www/crud/config.php";
include "C:/wamp/www/crud/entities/facture.php";
include "C:/wamp/www/crud/core/factureC.php";

$facture1C=new factureC();
$listefactures=$facture1C->afficherFacture();
?>                          
<?PHP
foreach($listefactures as $row){
    ?>           

   
    <page>
        <tr>
           <td style="width: 75%;">
            <strong><?= $row['nom_prenom']; ?></strong>
               

           </td>
           <td>
               

           </td> 
        </tr>
    </page>


  <?php   }?>
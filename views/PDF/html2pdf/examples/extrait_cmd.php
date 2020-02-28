<?php

require 'C:/wamp64/www/website_GYM/views/PDF/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

include "C:/wamp64/www/website_GYM/core/commandeC.php";
include "C:/wamp64/www/website_GYM/entites/commande.php";


$commandeC=new commandeC();
$listecommandes=$commandeC->affichercommandeC();
		/*$rowcount=mysqli_num_rows($result1);*/

try {

    
    ob_start(); 
    
    ?>
   <style type="text/Css">
    table{width: 100%;color: #717375;}
    table strong{color: #000;}
    h1{color: #000;padding: 0;margin: 0;}
    td.right{text-align: right;}
    table.border td{border: 1px solid #CFD1D2; padding: 3mm 1mm;}
    table.border th{background: #000;color: #FFF;font-weight: normal; border:solid 1px #FFF;padding: 3mm 1mm;text-align: left;}
    td.noborder{border:none;}
    hr{background: #717375; height:1px; border: none;}
    p{margin: 0; padding: 4mm 0 0 0;}
</style>

<page backtop="20mm" backleft="10mm" backright="10mm" backbottom="30mm" footer="page; date; ">
    
    <table>
        <tr>
           <td style="width: 70%;">
               <strong>Tableaux de commandes</strong><br>
               <p> &nbsp;</p>
            <p> &nbsp;</p>
              
           </td>
            <td style="width: 30%;">
               <strong>BF Académie</strong><br>
               <p> &nbsp;</p>
            <p> &nbsp;</p>
           </td>  
        </tr>
    </table>
    <table class="border">
        <thead>

            <tr>

                <th style="width: 20%">nom et prenom</th>
                <th style="width: 10%">numero</th>
                <th style="width: 10%">nom produit</th>
                <th style="width: 10%">Quantité</th>
                <th style="width: 10%">Prix</th>
                <th style="width: 10%">adresse</th>
                <th style="width: 10%">livraison</th>
            </tr>
        </thead>
<?php foreach($listecommandes as $row){ ?>
        <tbody>
            <tr>
                
                <td><?= $row['nom_prenom']; ?></td>
                <td><?= $row['tel']; ?></td>
                <td><?= $row['nom_prod']; ?></td>
                <td><?= $row['quantite']; ?></td>
                <td><?= number_format($row['prix'],2); ?> DT</td>
                <td><?= $row['adresse']; ?></td>
                <td><?= $row['mode_livraison']; ?></td>
            </tr>
          

        </tbody>
        <?php
}?>
    </table>
   
   
</page>
<?php

    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'fr' , 'true' , 'UTF-8');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('extrait_commandes.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

?>
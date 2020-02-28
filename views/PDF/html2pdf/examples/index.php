<?php

require 'C:/wamp64/www/website_GYM/views/PDF/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

       include "C:/wamp64/www/website_GYM/config.php";
include "C:/wamp64/www/website_GYM/core/factureC.php";
include "C:/wamp64/www/website_GYM/entites/facture.php";


$factureC=new factureC();
$listefactures=$factureC->recupererFactureC($_POST['id']);
		/*$rowcount=mysqli_num_rows($result1);*/

try {

    
    ob_start(); 
    foreach($listefactures as $row){
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
    <page_footer>
            <hr />
            <h1>Bon de commande : <?= $row['id_cmd'];  ?></h1>
            <p>Date : <?= $row['dat']; ?></p>
            <p>Cachet et signature de Bf Acedémie </p>
            <p> &nbsp;</p>
            <p> &nbsp;</p>
    </page_footer>
    <table>
        <tr>
           <td style="width: 70%;">
               <strong><?= $row['nom_prenom']; ?></strong><br>
               <?= $row['adresse']; ?><br>
              <?= $row['region']; ?><br>
              <?= $row['ville']; ?><br>
           </td>
            <td style="width: 30%;">
               <strong>BF Académie</strong><br>
                Hammamet 6 rue diamond <br>
           </td>  
        </tr>
    </table>

    <table style="vertical-align: bottom; margin-top: 20mm;">
        <tr>
            <td style="width: 70%;"><h1>Devis N°<?= $row['id']; ?></h1></td>
            <td style="width: 30%;" class="right">Emis le <?= $row['dat']; ?></td>
        </tr>
    </table>

    <table class="border">
        <thead>
            <tr>
                <th style="width: 64%">Description</th>
                <th style="width: 12%">Quantité</th>
                <th style="width: 12%">Prix</th>
                <th style="width: 12%">Montant</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $row['nom_prod']; ?></td>
                <td><?= $row['quantite']; ?></td>
                <td><?= number_format($row['prix'],2); ?> DT</td>
                <td><?= number_format($row['total'],2); ?> DT</td>
            </tr>
            <tr>
                <td>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" class="noborder"></td>
                <td>Total:</td>
                <td><?=  number_format($row['total'],2); ?></td>
            </tr>

        </tbody>
    </table>
    <table class="border">
        <thead>
            <tr>
                <th style="width: 25%">Mode de livraison</th>
                <th style="width: 25%">Mode de paiement</th>
                <th style="width: 50%">Adresse de livraison</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $row['mode_livraison']; ?></td>
                <td><?= $row['mode_paiement']; ?></td>
                <td><?= $row['adresse'] ?></td>
                
            </tr>
           
            

        </tbody>
    </table>
   
</page>
<?php
   } $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'fr' , 'true' , 'UTF-8');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('facture.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

?>
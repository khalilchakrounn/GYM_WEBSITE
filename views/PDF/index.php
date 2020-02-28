<?php

require 'C:/wamp/www/crud/views/pi-web-svn/PDF/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

       $hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "belkis";
		$connect = mysqli_connect($hostname, $username, $password, $databaseName);
		$query = "SELECT * FROM facture ";
		$factures = mysqli_query($connect, $query);
		/*$rowcount=mysqli_num_rows($result1);*/

try {
    ob_start();
    include 'C:/wamp/www/crud/views/pi-web-svn/PDF/html2pdf/examples/res/example00.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'fr' , 'true' , 'UTF-8');
    $html2pdf->writeHTML($content);
    $html2pdf->output('facture.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

?>
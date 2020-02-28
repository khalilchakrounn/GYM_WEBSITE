<HTML>
<head>
</head>
<body>
<?PHP
include "../../entites/cour.php";
include "../../core/courC.php";
if (isset($_GET['id'])){
	$courC=new courC();
    $result=$courC->recuperercour($_GET['id']);
	foreach($result as $row){
		
		$datet=$row['datet'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$horaire=$row['horaire'];
		$message=$row['message'];
		$coure=$row['coure'];
		$telephone=$row['telephone'];
?>
<form method="POST" action="modifiercourr.php">
<table>
<caption>Modifier cour</caption>
<tr>
<td>date</td>
<td><input type="text" name="datet" value="<?PHP echo $datet ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>horaire</td>
<td><input type="text" name="horaire" value="<?PHP echo $horaire ?>"></td>
</tr>
<tr>
<td>message</td>
<td><input type="text" name="message" value="<?PHP echo $message ?>"></td>
</tr>
<tr>
<td>coure</td>
<td><input type="text" name="coure" value="<?PHP echo $coure ?>"></td>
</tr>
<tr>
<td>telephone</td>
<td><input type="text" name="telephone" value="<?PHP echo $telephone ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>

</table>
</form>
<?PHP
	}
}

?>
</body>
</HTMl>

<HTML>
<head>
</head>
<body>
<?PHP
include "C:/wamp/www/crud/entities/commande.php";
include "C:/wamp/www/crud/core/commandeC.php";
if (isset($_GET['id'])){
    $commandeC=new commandeC();
    $result=$commandeC->recupererCommande($_GET['id']);
    foreach($result as $row){
        $nom_prenom=$row['nom_prenom'];
        $tel=$row['tel'];
        $nom_prod=$row['nom_prod'];
        $quantite=$row['quantite'];
        $taille=$row['taille'];
        $prix=$row['prix'];
        $adresse=$row['adresse'];
        $region=$row['region'];
        $ville=$row['ville'];
        $mode_livraison=$row['mode_livraison'];
        $mode_paiement=$row['mode_paiement'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom_prenom" value="<?PHP echo $nom_prenom ?>"></td>
</tr>
<tr>
<td>tel</td>
<td><input type="text" name="tel" value="<?PHP echo $tel ?>"></td>
</tr>
<tr>
<td>produit</td>
<td><input type="text" name="nom_prod" value="<?PHP echo $nom_prod ?>"></td>
</tr>
<tr>
<td>quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>
<tr>
<td>taille</td>
<td><input type="number" name="taille" value="<?PHP echo $taille ?>"></td>
</tr>
<tr>
<tr>
<td>prix</td>
<td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td></td>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<tr>
<td>region</td>
<td><input type="text" name="region" value="<?PHP echo $region?>"></td>
</tr>
<tr>
<tr>
<td>ville</td>
<td><input type="text" name="ville" value="<?PHP echo $ville ?>"></td>
</tr>
<tr>
<tr>
<td>mode_livraison</td>
<td><input type="text" name="mode_livraison" value="<?PHP echo $mode_livraison ?>"></td>
</tr>
<tr>
<tr>
<td>mode paiement</td>
<td><input type="text" name="mode_paiement" value="<?PHP echo $mode_paiement ?>"></td>
</tr>
<tr>


<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
    }
}
if (isset($_POST['modifier'])){
    $commande=new commande($_POST['nom_prenom'],$_POST['tel'],$_POST['nom_prod'],$_POST['quantite'],$_POST['taille'],$_POST['prix'],$_POST['adresse'],$_POST['region'],$_POST['ville'],$_POST['mode_livraison'],$_POST['mode_paiement']);
    $commandeC->modifierCommande($commande,$_POST['id_ini']);
    // $_POST['id_ini'];
  header('Location: afficherCommande.php');
//echo "valider";
}
?>
</body>
</HTMl>
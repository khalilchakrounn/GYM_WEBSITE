<?php

include "C:/wamp64/www/website_GYM/entites/commande.php";
include "C:/wamp64/www/website_GYM/core/commandeC.php";
include "C:/wamp64/www/website_GYM/entites/facture.php";
include "C:/wamp64/www/website_GYM/core/factureC.php";

              
if (!empty($_POST['nom_prenom']) and !empty($_POST['numero']) and !empty($_POST['nom_prod']) and !empty($_POST['qte'])  and !empty($_POST['prix']) and !empty($_POST['adresse']) and !empty($_POST['region']) and !empty($_POST['ville']) and !empty($_POST['r1']) and !empty($_POST['r2']) and (strlen($_POST['numero']) == 8) )

{
$commande1=new commande($_POST['id'],$_POST['nom_prenom'],$_POST['numero'],$_POST['nom_prod'],$_POST['qte'],$_POST['prix'],$_POST['adresse'],$_POST['region'],$_POST['ville'],$_POST['r1'],$_POST['r2']);
//Partie2
/*
var_dump($commande1);
}
*/
//Partie3
$commande1C=new commandeC();
$commande1C->ajouterCommande($commande1);

if (isset($_POST['id_cmd']) and isset($_POST['nom_prenom'])   and isset($_POST['adresse']) and isset($_POST['region']) and isset($_POST['ville']) and isset($_POST['r1']) and isset($_POST['r2']) and isset($_POST['nom_prod']) and isset($_POST['qte']) and  isset($_POST['prix']) and isset($_POST['total']))
{
$facture1=new facture($_POST['id_cmd'],$_POST['nom_prenom'],$_POST['adresse'],$_POST['region'],$_POST['ville'],$_POST['r1'],$_POST['r2'],$_POST['nom_prod'],$_POST['qte'],$_POST['prix'],$_POST['total']);

$facture1C=new factureC();

$facture1C->ajouterFacture($facture1);
header('Location: form_cmd.php');

}else{
  echo "vérifier ";
}

}else{
  echo "vérifier les champs";
 header('Location: form_cmd.php');
}

?>
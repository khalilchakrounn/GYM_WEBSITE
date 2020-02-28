function verif()
{
    var nom=document.getElementById('nome');
    var im=document.getElementById('im');
var idp=document.getElementById('idp');
    if (idp.value== '888') {
alert("tous les Produits sont en Promo");

    }
     else if(nom.value == '0' || im.value=='0' || idp.value=='0')
    alert("Remplir tout les champs");


}
function verif()
{
var im=document.getElementById('im');
var nom=document.getElementById('nome');
if(nom.value.length == 0 || im.value=='0')
    alert("Remplir tout les champs");
}
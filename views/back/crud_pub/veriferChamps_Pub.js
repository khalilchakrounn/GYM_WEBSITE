function verifChamps()
{  var nom=document.getElementById('nome');
    var pos=document.getElementById('position');
    var im=document.getElementById('images_input');
   if(nom.value.length ==0 || pos.value.length ==0 || im.value.length ==0 )
    alert("Remplir tout les champs");


}
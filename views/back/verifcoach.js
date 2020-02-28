
function verifchamps()
{   var nom=document.getElementById('nome');
    var pr=document.getElementById('prenom');
    var sp=document.getElementById('specialite');
    var mail=document.getElementById('mail');                                 
    var image=document.getElementById('image');
    if(nom.value.length ==0 || pr.value.length ==0 || sp.value.length ==0 || mail.value.length ==0 || image.value.length ==0 )   
alert("Remplir tout les champs");
 var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
 if(!regex.test(mail.value))
   alert("mail invalid");
}
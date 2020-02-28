function validerchamp()
{  var nom=document.getElementById('nom');
   var pr=document.getElementById('prenom');
   var d=document.getElementById('date');
   var t=document.getElementById('tel');
var h=document.getElementById('hor');
var c=document.getElementById('cours');
var m=document.getElementById('mess');
if(nom.value.length == 0 || pr.value.length == 0 ||d.value.length == 0 ||t.value.length == 0 ||h.value.length == 0 ||c.value.length == 0 ||
	m.value.length == 0 )
{
	alert("Remplir tous les champs");
}
if(t.value.length <8)
	alert("numero telephone doit comporter 8 chiffres");
}
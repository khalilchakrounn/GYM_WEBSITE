
function reset_produits() 
{
    document.getElementById("formulaire_p").reset();
   
}


function submit_produit(event)
{

	var produit_type=document.getElementById("type_input") ;  
var produit_nom=  document.getElementById("produit_input") ;
var produit_quantite=  document.getElementById("quantite_input") ;
var idcat=  document.getElementById("idcat_input") ;
var produit_prix=  document.getElementById("prix_input") ;
var produit_disc=  document.getElementById("descript_input") ;
var produit_ing=  document.getElementById("ingred_input") ;
var produit_gout=  document.getElementById("gout") ;
var produit_poids=  document.getElementById("poids_input") ;
var produit_image=  document.getElementById("imagess_input") ;

 if(  produit_type.value == "" || produit_nom.value == "" ||produit_quantite.value == "" ||idcat.value == "" || produit_prix.value == "" || produit_disc.value == ""|| produit_image.value == "")
						{
							event.preventDefault();
							alert("verifier les champs");	
						}
else{
		if(isNaN(produit_type.value)==false )
			{
				produit_type.style.color = 'red';
				event.preventDefault();
				alert("veuillez saisir un type !");
			}
   else if(isNaN(produit_nom.value)==false )
			{
				produit_nom.style.color = 'red';
				event.preventDefault();
				alert("veuillez saisir un nom !");
			}	
   
	else
	{alert("ajout reussi");}	

		
 }
}

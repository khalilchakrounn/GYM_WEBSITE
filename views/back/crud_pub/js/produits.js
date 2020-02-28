 var text  = /^[a-zA-Z]/; 
   var produit_nom=  document.getElementById("produit_input")  ;     
   var produit_nature=document.getElementById("nature_input") ;
   var categorie_nom=document.getElementById("nom_categorie_input") ;
   var abonement_nom=document.getElementById("nom_client_input") ;
   var abonemente_prenom=document.getElementById("prenom_client_input") ;
function reset_produits() 
{
    document.getElementById("formulaire_p").reset();
   
}
function reset_categorie() 
{
    document.getElementById("formulaire_c").reset();
   
}
function reset_abonement() 
{
    document.getElementById("formulaire_a").reset();
   
}

function submit_p(event)
{
//controle des champs vide
	if (formulaire_p.produit_input.value == "" || formulaire_p.marque_input.value == "" || formulaire_p.taille_input.value == "" )
		{ if( formulaire_p.nature_input.value == "" || formulaire_p.quantite_input.value == "" || formulaire_p.prix_input.value == "")
			{ if( formulaire_p.mini-descript_input.value == "" || formulaire_p.descript_input.value == "" || formulaire_p.ingred_input.value == "")
					{	if( formulaire_p.gout.value == "" || formulaire_p.imagess_input.value == "" || formulaire_p.poids.value == "")
							{
								alert("veuillez remplir les champs");
							}
						
					}	
			}

		}
		if (text.test(produit_nom.value) == false  )
			{ 
			produit_nom.style.color = 'orange';		
			 produit_nom.textContent = 'Format incorrect';
			} 
		if (text.test(produit_nature.value) == false  )
			{ 
			produit_nature.style.color = 'orange';
			produit_nature.textContent = 'Format incorrect';
			} 



}
function submit_c()
{if (formulaire_c.nom_categorie_input.value == "" || formulaire_c.id_categorie_input.value == "" || formulaire_c.descript_categorie_input.value == "" )
		{alert("veuillez remplir les champs");}
if (text.test(categorie_nom.value) == false  )
			{ 
			categorie_nom.style.color = 'orange';
			categorie_nom.textContent = 'Format incorrect';
			} 

}


function submit_a()
{if (formulaire_a.prenom_client_input.value == "" || formulaire_a.nom_client_input.value == "" || formulaire_a.text_input.value == "" )
		{if (formulaire_a.age_input.value == "" ||formulaire_a.cour_box.value == ""|| formulaire_a.duree_box.value == "" || formulaire_a.image_input.value == "" )
					{ 		alert("veuillez remplir les champs");}
		}
if (text.test(abonement_nom.value) == false  )
			{ 
			abonement_nom.style.color = 'orange';
			abonement_nom.textContent = 'Format incorrect';
			} 
if (text.test(abonemente_prenom.value) == false  )
			{ 
			abonemente_prenom.style.color = 'orange';
			abonemente_prenom.textContent = 'Format incorrect';
			} 
}
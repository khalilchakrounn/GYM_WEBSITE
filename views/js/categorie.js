var categorie_nom=document.getElementById("nom_categorie_input") ;
  

function reset_categorie() 
{
    document.getElementById("formulaire_c").reset();

}
function submit_c(event)
{
	if (formulaire_c.nom_categorie_input.value == "" || formulaire_c.descript_categorie_input.value == "" )
				{		event.preventDefault();
						alert("veuillez remplir tous les champs");
					}

// controle : nom contient seulement des lettres		
		 else if(isNaN(categorie_nom.value)==false)
			{
					categorie_nom.style.color = 'red';
					event.preventDefault();
					alert("veuillez saisir un nom  !");
			}
			else{
				alert(" ajout reussit ");
			}

}

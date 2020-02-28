function reset_abonement() 
{
    document.getElementById("formulaire_a").reset();
   
}

function submit_a(event)
{
	var abo_nom=document.getElementById("abonement_input") ;
var abo_prix=  document.getElementById("prix_a_input") ;
var abo_cour=document.getElementById("cour");
var abo_duree=document.getElementById("duree_box");
var abo_image=document.getElementById("image_input");

if (abo_nom.value == "" || abo_prix.value == ""||abo_cour.value == ""|| abo_duree.value == "" || abo_image.value == "" )
					{ event.preventDefault();
						alert("veuillez remplir tous les champs");}
  else{

						if(abo_prix.value <1 || abo_prix.value>9999)
						{	event.preventDefault();
							alert("veuillez saisir un prix resonable !");
							abo_prix.style.color = 'red';
						}

						// nom :des lettres
						else if(isNaN(abo_nom.value)==false)
						{abo_nom.style.color = 'red';
							event.preventDefault();
							alert("veuillez saisir un nom  !");
						}

						// cour :des lettres
						else if(isNaN(abo_cour.value)==false)
						{abo_cour.style.color = 'red';
							event.preventDefault();
							alert("veuillez saisir un nom de cour  !");
						}

						//prix : dos numeros
						else if(isNaN(abo_prix.value)==true)
						{abo_prix.style.color = 'red';
							event.preventDefault();
							alert("veuillez saisir un prix  !");
						}
						else 
						{
							alert("ajout reussit");
						}

}

}

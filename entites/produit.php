<?php

class Produit{
	private $type;
	private $nom;
	private $quantite;
	private $idcat;
	private $prix;
	private $description;
	private $ingredient;
	private $gout;
	private $poids;
	private $image;
	private $id;
	private $note;
	function __construct($type,$nom,$quantite,$idcat,$prix,$description,$ingredient,$gout,$poids,$image){
		$this->type=$type;
		$this->nom=$nom;
		$this->quantite=$quantite;
		$this->idcat=$idcat;
		$this->prix=$prix;
		$this->description=$description;
		$this->ingredient=$ingredient;
		$this->gout=$gout;
		$this->poids=$poids;
		$this->image=$image;
	}

			function getid()
				{
					return $this->id;
				}
				function setid($id)
					{
						$this->id=$id;
					}

			function gettype()
				{
					return $this->type;
				}
				function settype($type)
					{
						$this->type=$type;
					}
			


			function getnom()
				{
					return $this->nom;
				}
				function setnom($nom)
					{
						$this->nom=$nom;
					}
			

			function getquantite()
				{
					return $this->quantite;
				}
				function setquantite($quantite)
					{
						$this->quantite=$quantite;
					}
			


			function getidcat()
				{
					return $this->idcat;
				}
				function setidcat($idcat)
					{
						$this->idcat=$idcat;
					}


			function getprix()
				{
					return $this->prix;
				}
				function setprix($prix)
					{
						$this->prix=$prix;
					}		

			function getdescription()
				{
					return $this->description;
				}
				function setdescription($description)
					{
						$this->description=$description;
					}


			function getingredient()
				{
					return $this->ingredient;
				}
				function setingredient($ingredient)
					{
						$this->ingredient=$ingredient;
					}
			

			function getpoids()
				{
					return $this->poids;
				}
				function setpoids($poids)
					{
						$this->poids=$poids;
					}
			


			function getgout()
				{
					return $this->gout;
				}
				function setgout($gout)
					{
						$this->gout=$gout;
					}


			function getimage()
				{
					return $this->image;
				}
				function setimage($image)
					{
						$this->image=$image;
					}	
			function getnote()
				{
					return $this->note;
				}
				function setnote($note)
					{
						$this->note=$note;
					}		



}

?>
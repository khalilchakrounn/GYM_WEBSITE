<?php

class Wishlist{
	private $id_client;
	private $id_produit;
	function __construct($id_client,$id_produit){
		$this->id_client=$id_client;
		$this->id_produit=$id_produit;
	}
		function getid_client()
				{
					return $this->id_client;
				}
				function setid_client($id_client)
					{
						$this->id_client=$id_client;
					}


		function getid_produit()
				{
					return $this->id_produit;
				}
				function setid_produit($id_produit)
					{
						$this->id_produit=$id_produit;
					}



	}
	?>
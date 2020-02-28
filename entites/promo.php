<?PHP
class promo{
	
	private $nom;
	private $idp;
	private $pour;

	function __construct($nom,$idp,$pour){
		
		$this->nom=$nom;
		$this->idp=$idp;
		$this->pour=$pour;

	}
	

	function getNom(){
		return $this->nom;
	}
	function getIdp(){
		return $this->idp;
	}
	function getPour(){
		return $this->pour;
	}
	
	function setNom($nom){
		$this->nom=$nom;
	}

	function setIdp($idp){
		$this->idp=$idp;
	}
	function setPour($pour){
		$this->pour=$pour;
	}

	
}

?>
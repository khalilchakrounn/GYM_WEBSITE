<?PHP
class pub{
	
	private $nom;
	private $pos;
	private $im;

	function __construct($nom,$pos,$im){
		
		$this->nom=$nom;
		$this->pos=$pos;
		$this->im=$im;

	}
	

	function getNom(){
		return $this->nom;
	}
	function getPos(){
		return $this->pos;
	}
	function getIm(){
		return $this->im;
	}
	
	function setNom($nom){
		$this->nom=$nom;
	}

	function setPos($pos){
		$this->pos=$pos;
	}
	function setIm($im){
		$this->im=$im;
	}

	
}

?>
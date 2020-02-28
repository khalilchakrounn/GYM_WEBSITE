<?PHP
class courb{
	private $cour;
	private $temps;
	private $descrip;

	
	function __construct($cour,$temps,$descrip){
		
		$this->cour=$cour;
		$this->temps=$temps;
		$this->descrip=$descrip;


	}

	function getcour(){
		return $this->cour;
	}
	function gettemps(){
		return $this->temps;
	}
	function getdes(){
		return $this->descrip;
	}
	
	


	
}

?>
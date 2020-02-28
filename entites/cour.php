<?PHP
class cour{
	private $telephone;
	private $date;
	private $nom;
	private $prenom;
	private $horaire;
	private $message;
	private $coure;
	
	function __construct($date,$nom,$prenom,$horaire,$message,$coure,$telephone){
		
		$this->date=$date;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->horaire=$horaire;
		$this->message=$message;
		$this->coure=$coure;
	    $this->telephone=$telephone;

	}

	function getcoure(){
		return $this->coure;
	}
	function getnom(){
		return $this->nom;
	}
	function gettelephone(){
		return $this->telephone;
	}
	function getprenom(){
		return $this->prenom;
	}
	function gethoraire(){
		return $this->horaire;
	}
	function getdate(){
		return $this->date;
	}

	function getmessage(){
		return $this->message;
	}
	function setnom($nom){
		$this->nom=$nom;
	}

	function setcoure($coure){
		$this->coure=$coure;
	}
	function setprenom($prenom){
		$this->prenom;
	}
	function setdate($date){
		$this->date=$date;
	}
	function setmessage($message){
		$this->message=$message;
	}
	
	function settelephone($telephone){
		$this->telephone=$telephone;
	}
	
	function sethoraire($horaire){
		$this->horaire=$horaire;
	}


	
}

?>
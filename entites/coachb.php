<?PHP
class coachb{
	private $nom;
	private $prenom;
	private $specialite;
private $email;
private $image;
	
	function __construct($nom,$prenom,$specialite,$email,$image){
		
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->specialite=$specialite;
        $this->email=$email;
         $this->image=$image;
	}

	function getnomm(){
		return $this->nom;
	}
	function getprenomm(){
		return $this->prenom;
	}
	function getspecialite(){
		return $this->specialite;
	}
	
	function getemail(){
		return $this->email;
	}
	
		function getimage(){
		return $this->image;
	}
	


	
}

?>
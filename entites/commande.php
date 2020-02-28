<?PHP
class commande{

	private $id;
	private $nom_prenom;
	private $tel;
	private $nom_prod;
	private $quantite;

	private $prix;
	private $adresse;
	private $region;
	private $ville;
	private $mode_livraison;
	private $mode_paiement;



	function __construct($id,$nom_prenom,$tel,$nom_prod,$quantite,$prix,$adresse,$region,$ville,$mode_livraison,$mode_paiement){
		
		$this->id=$id;
		$this->nom_prenom=$nom_prenom;
		$this->tel=$tel;
		$this->nom_prod=$nom_prod;
		$this->quantite=$quantite;
		$this->prix=$prix;
		$this->adresse=$adresse;
		$this->region=$region;
		$this->ville=$ville;
		$this->mode_livraison=$mode_livraison;
		$this->mode_paiement=$mode_paiement;
		
	}
	
	

	function getId(){
		return $this->id;
	}
	function getNom_prenom(){
		return $this->nom_prenom;
	}
	function getTel(){
		return $this->tel;
	}
	
	function getNom_prod(){
		return $this->nom_prod;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getPrix(){
		return $this->prix;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getRegion(){
		return $this->region;
	}
	function getVille(){
		return $this->ville;
	}
	function getMode_livraison(){
		return $this->mode_livraison;
	}
	function getMode_paiement(){
		return $this->mode_paiement;
	}

	function setId($id){
		$this->id=$id;
	}
	function setNom_prenom($nom_prenom){
		$this->nom_prenom=$nom_prenom;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setId_prod($id_prod){
		$this->id_prod=$id_prod;
	}
	function setNom_prod($nom_prod){
		$this->nom_prod=$nom_prod;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}

	function setPrix($prix){
		$this->prix=$prix;
	}
	
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setRegion($region){
		$this->region=$region;
	}
	function setVille(){
		$this->ville=$ville;
	}
	function setMode_livraison($mode_livraison){
		$this->mode_livraison=$mode_livraison;
	}
	function setMode_paiement($mode_paiement){
		$this->mode_paiement=$mode_paiement;
	}
	
}

?>
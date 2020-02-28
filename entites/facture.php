<?PHP

class facture {

   
	private $id_cmd;
	private $nom_prenom;
	private $dat;
	private $adresse;
	private $region;
	private $ville;
	private $mode_livraison;
	private $mode_paiement;
	private $nom_prod;
	private $quantite;

	private $prix;
	private $total;



	function __construct($id_cmd,$nom_prenom,$adresse,$region,$ville,$mode_livraison,$mode_paiement,$nom_prod,$quantite,$prix,$total){
		$this->id_cmd=$id_cmd;
		$this->nom_prenom=$nom_prenom;
		
		$this->adresse=$adresse;
		$this->region=$region;
		$this->ville=$ville;
		$this->mode_livraison=$mode_livraison;
		$this->mode_paiement=$mode_paiement;
		$this->nom_prod=$nom_prod;
		$this->quantite=$quantite;
		
		$this->prix=$prix;
		$this->total=$total;
	}
	
	function getId_cmd(){
		return $this->id_cmd;
	}
	function getNom_prenom(){
		return $this->nom_prenom;
	}
	function getDat(){
		return $this->dat;
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
	function getNom_prod(){
		return $this->nom_prod;
	}
	function getQuantite(){
		return $this->quantite;
	}
	
	function getPrix(){
		return $this->prix;
	}
	function getTotal(){
		return $this->total;
	}
	
	function setId_cmd($id_cmd){
		$this->id_cmd=$id_cmd;
	}
	function setNom_prenom($nom_prenom){
		$this->nom_prenom=$nom_prenom;
	}
	function setTel($dat){
		$this->dat=$dat;
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
	function setNom_prod($nom_prod){
		$this->nom_prod=$nom_prod;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setTotal($total){
		$this->total=$total;
	}
	
}

?>
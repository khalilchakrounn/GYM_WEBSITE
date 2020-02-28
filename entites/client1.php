<?PHP
class Client{
	private $Firstname;
	private $Lastname;
	private $Username;
	private $ID;
	private $EMAIL;
	private $Birthday;
	private $image;
	private $password;
    private $adresse;
    private $sexe;
    private $mobile;
    
	/*function __construct($Firstname,Lastname,$Birthday,$image) {
	
		$this->Firstname=$Firstname;
		$this->Lastname=$Lastname;
	
		$this->Birthday=$Birthday;
	
		$this->image=$image;
	}*/
	
	/*	function __construct($Username,$EMAIL,$password) {
	
		$this->Username=$Username;
	
		$this->EMAIL=$EMAIL;
	
		$this->password=$password;
	}*/

/*
 function __construct($Username,$EMAIL,$password,$Firstname,$Lastname,$Birthday,$image,$mobile,$sexe,$adresse)
{
  
  	$this->Username=$Username;
	
		$this->EMAIL=$EMAIL;
	
		$this->password=$password;
		$this->Firstname=$Firstname;
		$this->Lastname=$Lastname;
		$this->Birthday=$Birthday;
		$this->image=$image;
	    $this->sexe=$sexe;
		$this->mobile=$mobile;
	   $this->adresse=$adresse;
		
}


*/

 function __construct()
{
    $ctp = func_num_args();
    $args = func_get_args();
    switch($ctp)
    {
        
        case '10':
            $this->fonction2($args[0],$args[1],$args[2],$args[3],$args[4],$args[5],$args[6],$args[7],$args[8],$args[9]);
            break;
        case '4':
        $this->fonction1($args[0],$args[1],$args[2],$args[3]);
            break;
             case '1':
        $this->setIMAGE($args[0]);
            break;
            case '2':
             $this->setPassword($args[0]);
            break;
         default:
            break;
    }
}

	public function fonction1($Username,$EMAIL,$mobile,$adresse)
	{
		$this->Username=$Username;
	
		$this->EMAIL=$EMAIL;
	
		$this->adresse=$adresse;
		$this->mobile=$mobile;
	}

		

	public function fonction2($Username,$EMAIL,$password,$Firstname,$Lastname,$Birthday,$image,$mobile,$sexe,$adresse)
	{
		$this->Username=$Username;
	
		$this->EMAIL=$EMAIL;
	
		$this->password=$password;
		$this->Firstname=$Firstname;
		$this->Lastname=$Lastname;
		$this->Birthday=$Birthday;
		$this->image=$image;
	    $this->sexe=$sexe;
		$this->mobile=$mobile;
	   $this->adresse=$adresse;
	}







		
	/********************************************************/
	function getID(){
		return $this->ID;
	}
	function getFIRSTNAME(){
		return $this->Firstname;
	}
		function getLASTNAME(){
		return $this->Lastname;
	}
	function getUsername(){
		return $this->Username;
	}
	function getEmail(){
		return $this->EMAIL;
	}
	function getBirthday(){
		return $this->Birthday;
	}
    function getImage(){
		return $this->image;
	}
	function getpassword(){
		return $this->password;
	}
	function getAdresse(){
		return $this->adresse;
	}
    function getSexe(){
		return $this->sexe;
	}
	function getMobile(){
		return $this->mobile;
	}


	function setID($ID){
		$this->ID=$ID;
	}
	function setFIRSTNAME($Firstname){
		$this->Firstname=$Firstname;
	}
		function setLASTNAME($Lastname){
		$this->Lastname=$Lastname;
	}
		function setUsername($Username){
		$this->Username=$Username;
	}

	function setEMAIL($EMAIL){
		$this->EMAIL=$EMAIL;
	}
	function setBirthday($Birthday){
		$this->Birthday=$Birthday;
	}

	function setIMAGE($image){
		$this->image=$image;
	}

	function setPassword($password){
		$this->password=$password;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setMobile($mobile){
		$this->mobile=$mobile;
	}
	function setSexe($sexe){
		$this->sexe=$sexe;
	}
}

?>
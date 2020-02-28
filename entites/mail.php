<?PHP
class Client{
	
    private $mail;
    
	

 function __construct($mail)
{
	$this->mail=$mail;
  }

	





		
	/********************************************************/

	function getEmail(){
		return $this->mail;
	}



	
	function setEMAIL($EMAIL){
		$this->mail=$EMAIL;
	}
	
}

?>
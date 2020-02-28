<?PHP
class reclamation{
	
	private $Username;
	private $type;
	private $message;
	private $image;



 function __construct($Username,$type,$message,$image)
{
   $this->Username=$Username;
   $this->type=$type;
   $this->message=$message;
   $this->image=$image;
    }


	/********************************************************/

	function getUsername(){
		return $this->Username;
	}

	function gettyp(){
		return $this->type;
	}

    function getImage(){
		return $this->image;
	}
	function getmessage(){
		return $this->message;
	}


	function setTUsername($Username){
		$this->Username=$Username;
	}

	function setTEMAIL($type){
		$this->type=$type;
	}

	function setTIMAGE($image){
		$this->image=$image;
	}

	function setmessage($message){
		$this->message=$message;
	}

}
?>
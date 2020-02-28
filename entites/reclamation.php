<?PHP
class reclamation{
	
	private $Username;
	private $type;
	private $message;
	private $image;
    private $ID;


 function __construct($Username,$type,$id,$message)
{
   $this->Username=$Username;
   $this->type=$type;
   $this->ID=$id;
   $this->message=$message;

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
	function getID(){
		return $this->ID;
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
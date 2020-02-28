<?PHP
class Categorie{
	private $id;
	private $description;
	private $nom;

	function __construct($nom,$desc){	
		$this->nom=$nom;
		$this->description=$desc;
	}

				function getid()
				{
					return $this->id;
				}

					function setid($id)
					{
						$this->id=$id;
					}

				function getdescription()
				{
					return $this->description;
				}
					function setdescription($description)
					{
						$this->description=$description;
					}

				function getnom()
				{
					return $this->nom;
				}
					function setnom($nom)
					{
						$this->nom=$nom;
					}


}
?>
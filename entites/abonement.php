<?PHP
class Abonement{
	private $id;
	private $nom_abonement;
	private $duree;
	private $cour;
	private $image;
	private $prix;

	function __construct($nom_abon,$duree,$cour,$image,$prix){	
		$this->nom_abonement=$nom_abon;
		$this->duree=$duree;
		$this->cour=$cour;
		$this->image=$image;
		$this->prix=$prix;
	}

				function getid()
				{
					return $this->id;
				}

					function setid($id)
					{
						$this->id=$id;
					}

				function getnom_abonement()
				{
					return $this->nom_abonement;
				}
					function setnom_abonement($nom_abonement)
					{
						$this->nom_abonement=$nom_abonement;
					}

				function getduree()
				{
					return $this->duree;
				}

					function setduree($duree)
					{
						$this->duree=$duree;
					}

				function getcour()
				{
					return $this->cour;
				}

					function setcour($cour)
					{
						$this->cour=$cour;
					}

				function getimage()
				{
					return $this->image;
				}

					function setimage($image)
					{
						$this->image=$image;
					}

				function getprix()
				{
					return $this->prix;
				}
					function setprix($prix)
					{
						$this->prix=$prix;
					}		

}
?>
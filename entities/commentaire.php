<?PHP
class Commentaire{

	private $identifiant;
	private $valeur;
	function __construct($identifiant,$valeur) {
		$this->identifiant=$identifiant;
		$this->valeur=$valeur;
	}
	function getId(){
		return $this->identifiant;
	}
	function getValeur(){
		return $this->valeur;
	}
	function setId($identifiant){
		$this->identifiant=$identifiant;

	}
	function setValeur($valeur){
		$this->valeur=$valeur;
	}




}
?>
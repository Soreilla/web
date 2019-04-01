<?php
class Jaime
{
	
	private $id_prod;
	private $nom;
	private $jaime;
	private $jaimepas;
	private $commente;

	function __construct($id_prod,$nom,$jaime,$jaimepas,$commente){
		
		$this->id_prod=$id_prod;
		$this->nom=$nom;
		$this->jaime=$jaime;
		$this->jaimepas=$jaimepas;
		$this->commente=$commente;
	}
	function getJaime(){
		return $this->jaime;
	}
	function getIdProd(){
		return $this->id_prod;
	}
	function getJaimepas(){
		return $this->jaimepas;
	}
	function getCommente(){
		return $this->commente;
	}
	function setJaime($jaime){
		$this->jaime=$jaime;
	}
	function setJaimepas($jaimepas){
		$this->jaimepas=$jaimepas;
	}

}
?>
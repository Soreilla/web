<?php
class Jaime
{
	private $id_jaime;
	private $id_prod;
	private $id_client;

	function __construct($id_jaime,$id_prod,$id_client){
		$this->id_jaime=$id_jaime;
		$this->id_prod=$id_prod;
		$this->id_client=$id_client;
	}
	function getIdJaime(){
		return $this->id_jaime;
	}
	function getIdProd(){
		return $this->id_prod;
	}
	function getIdClient(){
		return $this->id_client;
	}

}
?>
<?php


class Reclamation{
	private $id_reclamation;
	private $nom;
	private $email;
	private $phone;
	private $adress;
	private $message;
	private $id;
	private $reponse;

	function __construct($id_reclamation,$nom,$email,$phone,$adress,$message,$id,$reponse){
		$this->id_reclamation=$id_reclamation;
		$this->nom=$nom;
		$this->email=$email;
		$this->phone=$phone;
		$this->adress=$adress;
		$this->message=$message;
		$this->id=$id;
		$this->reponse=$reponse;
	
	}
	function getIdReclamation()
	{
		return $this->id_reclamation;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getPhone()
	{
		return $this->phone;
	}
	function getAdress(){
		return $this->adress;
	}
	function getMessage(){
		return $this->message;
	}
	function getId(){
		return $this->id;
	}
	function getReponse(){
		return $this->reponse;
	}
	

}

  ?>

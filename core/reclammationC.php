<?php
include '../config.php';
class ReclamationC
{
	
function ajouterReclamation($reclamation){
/*
	$req = "INSERT INTO reclamation(nom,email,phone,adress,message)values('".$reclamation->getNom()."','".$reclamation->getEmail()."','".$reclamation->getPhone()."','".$reclamation->getAdress()."','".$reclamation->getMessage()."')";*/
	$sql="INSERT INTO reclamation(nom,email,phone,adress,message)values('".$reclamation->getNom()."','".$reclamation->getEmail()."','".$reclamation->getPhone()."','".$reclamation->getAdress()."','".$reclamation->getMessage()."')";
	echo $sql;
	$db=config::getConnexion();
	try{
		$req=$db->prepare($sql);
		$req->execute();
	}
	catch(Exception $e)
	{
		echo 'Erreur'.$e->getMessage();
	}

	
	//echo $req;
	
	//$conn->query($req);

/*
$sql=" insert into reclamation(nom,email,phone,adress,message) values(:nom,:email,:phone,:adress,:message) ";

	$db=config::getConnexion();
		try{
			echo $sql;
			echo "bonj";
			$req=$db->prepare($sql);
			$id_reclamation=$reclamation->getIdReclamation();
			$nom=$reclamation->getNom();
			$email=$reclamation->getEmail();
			$phone=$reclamation->getPhone();
			$adress=$reclamation->getAdress();
			$message=$reclamation->getMessage();
			$id=$reclamation->getId();
			$req->bindValue(':id_reclamation',$id_reclamation);
			$req->bindValue(':nom',$nom);
			$req->bindValue(':email',$email);
			$req->bindValue(':phone',$phone);
			$req->bindValue(':adress',$adress);
			$req->bindValue(':message',$message);
			$req->bindValue(':id',$id);

			header('Location:image2.php');
		}
		catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        */

}

function afficherReclamation(){
$sql="SELECT id_reclamation, nom, email,phone,adress,message FROM reclamation";
$db = config::getConnexion();
		
		try{
			$liste=$db->query($sql);
			return $liste;
		
		}
		catch(Exception $c){
			die('Erreur: '.$c->getMessage());
		}
}
function afficherReponse($id_reclamation)
{
	$sql="SELECT reponse FROM reclamation where id_reclamation=:id_reclamation";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':id_reclamation',$_GET['id_reclamation']);
	try{
		$req->execute();
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}
}
function InsererReponse()
{
	$sql="INSERT INTO  reclamation (reponse) values(".$reclamation->getReponse().") where id_reclamation=id_reclamation";
	$db = config::getConnexion();
	try{
		$req=$db->prepare($sql);
			$req->bindValue(':id_reclamation',$_GET['recup']);
			
			$req->execute();		
		
	}catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}
}



}
?>
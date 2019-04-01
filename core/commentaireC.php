<?php
include '../config.php';
class CommentaireC{
	/*function afficherCommentaire(){
		$sql="SELECT * FROM commentaire";
		$db=config::getConnexion();
		$liste=$db->query($sql);
		return $liste;*/

		function ajouterCommentaire($commentaire){
		$sql= " insert into commentaire(identifiant,valeur) values(:identifiant ,:valeur)";
		$db=config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$identifiant=$commentaire->getId();
			$valeur=$commentaire->getValeur();
			$req->bindValue(':identifiant',$identifiant);
			$req->bindValue(':valeur',$valeur);
			$req->execute();
			header('Location:image2.php');
		}
		catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
	function afficherCommentaire(){
		//echo"valeur::".$commentaire->getValeur()."<br>";
		$sql="SELECT * FROM commentaire ";
		$db = config::getConnexion();
		
		try{
			$liste=$db->query($sql);
			return $liste;
		
		}
		catch(Exception $c){
			die('Erreur: '.$c->getMessage());
		}
	}
	function supprimerCommentaire(){
		$sql="DELETE FROM commentaire where identifiant= :identifiant LIMIT 1";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':identifiant',$_GET['identifiant']);

		try{
            $req->execute();
          // header('Location:back/avis.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}
}
	
	
		
		

	



?>
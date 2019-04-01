<?php
//include '../config.php';
session_start();
	$_SESSION['id']=2;
class ProduitC{
	
	function recup_produit(){
		$sql="SELECT * FROM produit";
		$db=config::getConnexion();
		//$produit = array();
		
		try{
		$liste=$db->query($sql);
			return $liste;
			
			
		}
		catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
	function nombre_jaime($id_prod){
		$id_prod=(int)$id_prod;
		$sql="SELECT jaime FROM produit WHERE id_prod='$id_prod'";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			
			return $liste;
		}
		catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
	function ajouter_jaime($id_prod)
	{
		$id_prod=(int)$id_prod;
		$sql=" UPDATE produit SET jaime=jaime+1 WHERE id_prod='$id_prod' ";
		$sql1="INSERT INTO jaime(id_prod,id_client) VALUES('$id_prod',{$_SESSION['id']})";
		$db=config::getConnexion();
		try{
			$db->query($sql);
			
			
			$db->query($sql1);
		}
		catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
	function deja_aime($id_prod){
		$id_prod=(int)$id_prod;
		$sql="SELECT * FROM jaime WHERE id_prod='$id_prod' and id_client='{$_SESSION['id']}'";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			$rows=$liste->rowCount() ;
			//return($rows);
			if($rows==0){
				return false;
			}else
			{
				return true;
			}
		
			}catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
 


	}
}
?>
<?php
//echo "ok";
include '../config.php';
include  "C:\wamp\www\projet2A_WEB\core\ProduitC.php";
if(isset($_POST['id_prod'],$_SESSION['id']))
{
$id_prod=$_POST['id_prod'];
//echo $id_prod;
$p= new produitC();

if($p->deja_aime($id_prod)===true)
{
	//echo $p->deja_aime(2);
	
	echo "Vous avez deja aime cet article";
}else{
	$p->ajouter_jaime($id_prod);
	echo "ok";
	/*$e=$p->deja_aime($id_prod);
echo $e;*/
}

}
?>
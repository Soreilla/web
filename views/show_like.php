<?php
//echo "ok";
include  "C:\wamp\www\projet2A_WEB\core\ProduitC.php";
if(isset($_POST['id_prod'],$_SESSION['id']))
{
$id_prod=$_POST['id_prod']	;
echo $id_prod;
if($p->deja_aime(2)===true)
{
	echo "Vous avez deja aime cet article";
}else{
	ajouter_jaime(2);
	echo "ok";
}

}
?>
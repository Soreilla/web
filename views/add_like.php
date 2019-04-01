<?php
//echo "1";
include '../config.php';
include  "C:\wamp\www\projet2A_WEB\core\ProduitC.php";
if(isset($_POST['id_prod'],$_SESSION['id']))
{
	$p= new produitC();
	$id_prod=$_POST['id_prod'];
    $p->nombre_jaime($id_prod);
}
?>
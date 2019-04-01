<?php
include'../entities/reclamation.php';
include'../core/reclammationC.php';



/*if(isset($_POST['autre'])){
	$r= new reclamation('','','','','','','',$_POST['autre']);
	$reponse=$_POST['autre'];
	echo $reponse;
}
else{
$r= new reclamation('','','','','','','',$_POST['reponse']);
$reponse=	$_POST['reponse'];
echo $reponse;
	//echo $r;
}*/
$reponse=$_POST['reponse'];
	echo $reponse;
$rnew= new reclamationC();
$rnew->insererReponse();
//header('Location:afficherReponse.php');
?>


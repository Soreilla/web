<?php
include'../entities/reclamation.php';
include'../core/reclammationC.php';

/*

if(isset($_POST['autre'])){
	$r= new reclamation('','','','','','','',$_POST['autre']);
	$reponse=$_POST['autre'];
	echo $reponse;
	echo "je ne trouve pas autre";
}
else{
//$r= new reclamation('','','','','','','',$_POST['reponse']);
//$reponse=	$_POST['reponse'];
//echo $reponse;
	echo"je ne trouve pas reponse";
}
*/
echo $_GET['recup'];
echo $_GET['autre'];
$rnew= new reclamationC();
$rnew->insererReponse();
//header('Location:afficherReponse.php');
?>


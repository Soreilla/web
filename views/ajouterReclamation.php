<?php
include'../entities/reclamation.php';
include'../core/reclammationC.php';


$r=new Reclamation('',$_POST['nom'],$_POST['email'],$_POST['phone5'],$_POST['adress'],$_POST['message'],'','');

$rnew= new ReclamationC();

//$rnew->ajouterReclamation($r,$conn);

//$conn = $rnew->db; //public 
$rnew->ajouterReclamation($r);
header('Location:image2.php');

?>
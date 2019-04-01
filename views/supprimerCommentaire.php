<?PHP
	include  "C:\wamp\www\projet2A_WEB\core\commentaireC.php";
	$commentaireC=new CommentaireC();
	$commentaireC->supprimerCommentaire();
	/* $id=$_GET['identifiant'];
        echo $id;*/
	header('Location:back/avis.php');


?>
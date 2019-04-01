<?PHP
include '../entities/commentaire.php';
include '../core/commentaireC.php';
$c= new Commentaire('',$_POST['valeur']);
$cnew= new CommentaireC();
$cnew->ajouterCommentaire($c);
header('Location:image2.php ')

?>
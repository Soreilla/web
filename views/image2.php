 <?php
include  "C:\wamp\www\projet2A_WEB\core\commentaireC.php";
include  "C:\wamp\www\projet2A_WEB\core\ProduitC.php";
//include "metierlike.php";
$c= new commentaireC();
$liste=$c->afficherCommentaire();
$p= new produitC();
$listeP=$p->recup_produit();
//$pardon=$p->deja_aime(2);
//echo $pardon;


//$njaime=$p->nombre_jaime(1);
//echo $njaime;
?>
<!doctype html>
<html>
<head>
	<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Custom Theme files -->
<link href="front office/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="front office/css/style.css" type="text/css" rel="stylesheet" media="all">  

<link href="front office/css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link rel="stylesheet" href="front office/smoothbox.css" type='text/css' media="all" /> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="front office/js/image.js"></script>
<script src="front office/js/jquery-2.2.3.min.js" ></script>  


<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
	
</head>
<body>
<div class="banner">
	
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="front office/index.html">Mimosas</a></h1>
				</div> 
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="front office/index.html"> Home</a></li>
							<li><a href="front office/about.html"> About</a></li> 
							<li><a href="front office/gallery.html" class="active"> Gallery</a></li> 
							<li><a href="front office/codes.html"> Short Codes</a></li>
							<li><a href="front office/icons.html"> Web Icons</a></li>
							<li><a href="front office/contact.html"> Contact Us</a></li>
						</ul>
					</div> 
				</div>   
				<div class="social-w3licon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="banner-text w3labout-bnr"> 
			<div class="container">  
				<h2><a href="front office/index.html">Accueil</a> / Menu</h2>   
			</div>
		</div>
		
	</div>

<div class="about gallery">
		<div class="container"> 
			<div class="w3ls-title"> 
			</div> 
			<div class="cote">
				<div class="note">
					<span>
						Sandwich BIO:
						<br>
						Tranche de pain à base de farine complète
						Salade, avocat, tomate 

					</span>
				</div>
				<br/>
				<br/>
				<div class="commentaire">
					<span>
				<table border="1" id="matable">
					<thead>
	<tr>
		<th> Listes des commentaires</th>
		
	</tr>
	</thead>
	<?php
	/*session_start();
	$_SESSION['id']=1;*/
	foreach ($liste as $row) {
		?>
		<tbody>
			<tr>
				<th> <?php// echo $row['id_'] ?>Marielle<th>
			</tr>
	<tr>
		
	<td><?PHP echo $row['valeur']; ?></td>

	
	</tr>
	</tbody>
	<?PHP

		

	}

	?>
	

</table>
					</span>
				</div>
			</div>
			<div  class="milieu">
				
				<div class="droite">
					<table>
					<form>
				
					       <tr><td></td></tr>
					    <tr><td></td></tr>

					      <tr>
						<td>
							<ul class="ul">
								<li class="li">
							<a href="reclamationui.php">
								Faire une reclamation
								<?php
								//header('Location:reclamationui.php')
								?>
							</a>
						</li>
							<ul>
								</td>
					   </tr>
					
					</form>
					</table>
				</div>
				<div class="gauche">

					<form name="formCommentaire" method="POST" action='ajouterCommentaire.php'>
							<a href="front office/gallery.html" title="Sandwich Bio" class="sb" >
								<img src="front office/images/g2.jpg" width="340" alt=" " class="img-responsive" />
								
							</a>
								 <br>
								   <span>
									    	<?php
									    	//on va tester ici
									    	/*while($rows=mysql_fetch_assoc($listeP)){
				                            $produit[]=$rows;
											}
									    	//print_r($p->recup_produit());
												*/
									    	?>
									    	<?php
	//session_start();
	//$_SESSION['id']=1;
	foreach ($listeP as $row) {
		?>

	

		<tbody>
			<tr>
				<th> <?php// echo $row['id_'] ?><th>
			</tr>
	<tr>
		
	<td><?PHP //echo $row['id_prod']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP// echo $row['jaime']; ?></td>
	<td><?PHP// echo $row['jaimepas']; ?></td>
	<td><?PHP //echo $row['commente']; ?></td>

	
	</tr>
	<tr>
		<td>
		<!--<div class="like">--><?php
									echo '<a href="#" class="'. $row['id_prod'].'" id="like">
								      
								       	<img src="front office/images/like.png" width="40"  class="img-responsive" />
								
								      
								            </a> 
								            '?>
								<!--</div>-->
								</td>
								<td><?PHP echo '<span id="id'.$row['id_prod'].'">'.$row['jaime'].'</span>'; ?></td>
	</tr>

	</tbody>
	<?PHP

		

	}

	?>
	<div id="feedback"></div>
	<script type="text/javascript" src="front office/js/func.js"></script>
                 </table>

									    </span>

								
								<div class="dislike">
									<a href="#">
									    <button onclick="myFunction()" class="bouton" name ="dislike">		
									    <img src="front office/images/dislike.png" width="40" class="img-responsive" />
									    </button>
									  </a>
									  
								</div>
								<br>
							    <div class="">

								        <input type="text" name="valeur" placeholder=""  class="restyle"> 
								        <br/>
								        <br/>
								 <input type="submit" value="Publier" id="pub">
								</div>
                        </form>
                        
				</div>
			</div>

</body>
</html>

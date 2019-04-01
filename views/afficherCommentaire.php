<?php
include  "../core/commentaireC.php";
$c= new commentaireC();
$liste=$c->afficherCommentaire();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="../css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link rel="stylesheet" href="../css/smoothbox.css" type='text/css' media="all" /> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/image.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
	</title>
</head>
<body>
<div class="banner">
	
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="../front office/index.html">Mimosas</a></h1>
				</div> 
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="index.html"> Home</a></li>
							<li><a href="about.html"> About</a></li> 
							<li><a href="gallery.html" class="active"> Gallery</a></li> 
							<li><a href="codes.html"> Short Codes</a></li>
							<li><a href="icons.html"> Web Icons</a></li>
							<li><a href="contact.html"> Contact Us</a></li>
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
				<h2><a href="index.html">Accueil</a> / Menu</h2>   
			</div>
		</div>
		
	</div>
<table border="1">
	<tr>
		<th> Listes des commentaires</th>
		
	</tr>
	
	<?php
	foreach ($liste as $row) {
		?>
	<tr>
	<td><?PHP echo $row['valeur']; ?></td>

	
	</tr>
	<?PHP

		

	}

	?>
	

</table>
</body>
</html>
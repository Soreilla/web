
<?php
include'C:\wamp\www\projet2A_WEB\core\reclammationC.php';

$r= new reclamationC();
$liste=$r->afficherReclamation();
//$reponse=$r->afficherReponse();
//header('Location:image2.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dine a Hotels and Restaurants Category Bootstrap Responsive website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="front office/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="front office/css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="front office/css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="front office/js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html">Mimosas</a></h1>
				</div> 
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="index.html"> Home</a></li>
							<li><a href="about.html"> About</a></li> 
							<li><a href="gallery.html"> Gallery</a></li> 
							<li><a href="codes.html"> Short Codes</a></li>
							<li><a href="icons.html"> Web Icons</a></li>
							<li><a href="contact.html" class="active"> Contact Us</a></li>
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
		<!-- //header --> 
		<!-- banner-text -->
		<div class="banner-text w3labout-bnr"> 
			<div class="container">  
				 
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->   
		<!-- contact -->
	<div class="contact">
		<div class="container">  
			<div class="w3ls-title"> 
			
			</div>
			<div class="contact-row agileits-w3layouts new-agileinfo">   
				<div class="col-md-6 col-sm-6 contact-w3lsleft">
					<div class="contact-grid agileits">
						<h4>Bienvenue, nous vous prions de remplir le formulaire qui suit!</h4>
						<form action="ajouterReclamation.php" method="POST" name="reclameForm"> 
							<input type="text" name="nom" placeholder="Nom" required="">
							<input type="email" name="email" placeholder="Email" required=""> 
							<input type="text" name="phone5" placeholder="Telephone" required="">
							<input type="text" name="adress" placeholder="Adresse" required="">
							<textarea name="message" placeholder="Objet de la reclamation..." required=""></textarea>
							<a href="#"> <input type="submit" value="Reclamer" ></a>
						</form> 
					</div>
				</div>
				<div class="col-md-6 col-sm-6 contact-w3lsright">
					<div class="ma">
						<h3> Etat de la Reclamation</h3>
						
					</div> 
				</div>
				<div class="clearfix"> </div>
			</div>	
		</div>	
	</div>
	<!-- //contact -->  
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-5 col-sm-5 agileinfo_footer_grid">
				<h3 class="agileits-title">About Us</h3>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
					fugiat nulla pariatur. <span>Excepteur sint occaecat cupidatat non proident 
					sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
			</div>
			<div class="col-md-3 col-sm-3 agileinfo_footer_grid mid-w3l nav2">
				<h3 class="agileits-title">Popular</h3>
				<ul>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Proin placerat</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Ipsum et rutrum</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Proin semper utr</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Ligula sit amet</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 agileinfo_footer_grid">
				<h3 class="agileits-title">Address</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>
				</ul>
			</div> 
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2017 Dine. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="front office/modal-body modal-spa">
					<img src="front office/images/g2.jpg" class="img-responsive" alt=""/>
					<div class="modal-w3lstext">
						<h4>Blanditiis deleniti</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eumi.</p>
					</div> 
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->    
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script> 
	<!-- //menu-js -->
	<!-- jarallax -->  
	<script src="front office/js/SmoothScroll.min.js"></script> 
	<script src="front office/js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="front office/js/move-top.js"></script>
	<script type="text/javascript" src="front office/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  		
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="front office/js/bootstrap.js"></script>
</body>
</html>
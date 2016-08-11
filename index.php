
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<?php   session_start();?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Producciones JL</title>
	<meta name="description" content="Todo lo relacionado con fotografia digital" />
	<meta name="keywords" content="Fotografia, edicion de video, estudio fotografico, montajes, marqueteria, eventos sociales" />
	<link rel="shortcut icon" href="images/icon.png"> 

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
		
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">PRODUCCIONES<span> JL</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.php">Inicio</a>
								</li>
								<li>
									<a href="productos.php" class="fh5co-sub-ddown">Productos</a>
								
								</li>
								<li>
									<a href="servicios.php" class="fh5co-sub-ddown">Servicios</a>
									 
								</li>
								<li>
									<a class="fh5co-sub-ddown">Nosotros</a>
										<ul class="fh5co-sub-menu">
											<li><a href="somos.php">Quienes somos</a></li>
											<li><a class="fh5co-sub-ddown">Empresa</a>
												<ul class="fh5co-sub-menu">
													<li><a href="Empresa.php" target="_blank">Mision y Vision</a></li>
												</ul>
											</li>
										</ul>
								</li>
								
								<li>
									<a class="fh5co-sub-ddown">Cuenta</a>
										<ul class="fh5co-sub-menu">
											<li><a href="ingresa.php">Ingresa</a></li>
											<li><a href="registrate.php" >Registrate</a></li>
										</ul>
								</li>
								
								<li>
								<span> <?php=if( isset( $_SESSION["names"] )){
									echo 'hola'.'$_SESSION["names"]';
								}  ?></span>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image.jpg);">
				<div class="desc animate-box">
					
					<h2>Producciones JL</h2>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						 <div class="item active">
						  <img src="images/Banner2.png" alt="Arte">
						  <div class="carousel-caption">
							<h2>JL</h2>
						  </div>
						</div>
						
						<div class="item">
						  <img src="images/Banner1.jpg" alt="Arte">
						  <div class="carousel-caption">
						
						  </div>
						</div>
						<div class="item">
						  <img src="images/Banner3.jpg" alt="Arte">
						  <div class="carousel-caption">
						
						  </div>
						</div>
						
						
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>

		
				</div>
				
			</div>

		</div>
		<!-- end:header-top -->
		<div id="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Noticias</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<div class="fh5co-grid animate-box" style="background-image: url(images/noticia1.jpg);" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=100;this.height=80;" width="100" height="80" alt="" />
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>No te pierdas de nuestras promociones</h3>
									<span>Trae a tu bebe durante su primer año y llévate como obsequio un collage. </span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(images/noticia2.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>Búscanos en Halloween</h3>
									<span>En Halloween estaremos ubicados en la CR 7 frente a la iglesia municipal</span>
								</div>
							</a>
						</div>
					</div>
					
					<div class="col-md-8 col-sm-8">
						<div class="fh5co-grid animate-box" style="background-image: url(images/noticia3.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>Prueba nuestro nuevo servicio.</h3>
									<span>Asesoramos en todo lo relacionado con seguridad social. <br>Si estás buscando afiliarte a una E.P.S te ayudamos.</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fh5co-work-section -->
		<div id="fh5co-services-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Seguridad Social</h3>			
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><a href="http://www.fosyga.gov.co/" target="_blank"> <img  src="images/fosyga.png"  /></a></span>
							<h3>FOSYGA</h3>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><a href="http://ruafsvr2.sispro.gov.co/RUAF/Cliente/WebPublico/Consultas/D04AfiliacionesPersonaRUAF.aspx" target="_blank"><img src="images/RUAF.png"/></a></span>
							<h3>RUAF</h3>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><a href="https://www.minsalud.gov.co/" target="_blank"><img src="images/minsalud.png"/> </a></span>
							<h3>MinSalud</h3>
							
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
							<span>Síguenos en </Span>
								<a href="https://www.facebook.com/produccionesJL05/" target="_blank"><i class="icon-facebook2"></i></a>
							</p>
							<p>Melgar - Tolima Cra 29 # 11-95 Barrio Galan <br>3112731393</p>
							
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
<!-- banner-->
</body>
</html>

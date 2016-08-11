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
		
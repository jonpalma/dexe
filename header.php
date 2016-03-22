<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Agencia Mixen - www.mixen.mx">
		<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
		<title>Dexe Desarrolladora</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/colorbox.css">
		<link rel="stylesheet" href="css/hover-effects.css">
		<link rel="stylesheet" href="css/ekko-lightbox.css">
		<link rel="stylesheet" href="css/lightgallery.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body <?php if($thispage=="index") echo 'data-spy="scroll" data-target=".navbar-nav"' ?>>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
									})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-74462329-1', 'auto');
			ga('send', 'pageview');

		</script>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand no-drag" href="index.php"><img class="no-drag" src="img/logo.png" alt="logo"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right">
						<li><a href="<?php if( !($thispage == 'index') ) echo 'index.php'; ?>#inicio" class="smoothScroll">Inicio</a></li>
						<li><a href="<?php if( !($thispage == 'index') ) echo 'index.php'; ?>#nosotros" class="smoothScroll">Nosotros</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fraccionamientos</a>
							<ul class="dropdown-menu">
								<li><a href="puente-piedra.php">Puente de Piedra</a></li>
								<li><a href="victoria.php">Hacienda Victoria</a></li>
							</ul>
						</li>
						<li><a href="<?php if( !($thispage == 'index') ) echo 'index.php'; ?>#descargar" class="smoothScroll">Descargar App</a></li>
						<li><a href="<?php if( !($thispage == 'index') ) echo 'index.php'; ?>#contacto" class="smoothScroll">Contacto</a></li>
						<li><a href="http://mixen.mx/web/dexe-app/">Login</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
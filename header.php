<!DOCTYPE html>
<html>
<head>
	
	<meta name="robots" content="index, follow">
	<meta charset="UTF-8">
	<meta name="author" content="Milcar">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/favicon-quiromedico1.png">
	<link href="css/bootstrap-datepicker3.min.css" rel="stylesheet" />
	<link href="css/formValidation.min.css" rel="stylesheet" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/bootstrap-datepicker.es.min.js"></script>
	<script src="js/bootstrapvalidator.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="https://smtpjs.com/v3/smtp.js"></script>
	<script src="js/main.js"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-144006240-1');
	</script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Zilla+Slab:300,400&display=swap" rel="stylesheet">
</head>
<body>
	<script type="text/javascript">
		AOS.init();
	</script>
	<nav class="navbar navbar-white" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">
					<img class="full" src="https://raw.githubusercontent.com/LuzCarrillo/quiromedico/master/images/quiromedico-logo.png" alt="QuieroMédico">
				</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right navbar">
					<li><a href="quienes-somos.php">SOMOS</a></li>
					<li><a href="testimonios.php">TESTIMONIOS</a></li>
					<li><a href="maquina-de-descompresion.php">SPINEMED</a></li>
					<li><a href="tratamientos.php">TRATAMIENTOS</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						ESPECIALISTAS <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="doctor-quiropractico.php">QUIROPRÁCTICO</a></li>
							<li><a href="nutriologa-cdmx.php">NUTRIÓLOGA</a></li>
							<li><a href="traumatologo-cdmx.php">TRAUMATÓLOGO</a></li>
						</ul>
					</li>
					<li><a href="contacto.php">CONTACTO</a></li>
					<li><a class="green" href="https://api.whatsapp.com/send?phone=5215538777847&text=Hola,%20tengo%20una%20duda%20sobre%20QuiroMedico&source=&data=" target="_blank">WHATSAPP <span class="glyphicon glyphicon-earphone circule" aria-hidden="true"></span></a></li>
				</ul>
			</div>
		</div>
		<a id="agendaCitaBtn" class="btn-agendar" href="agenda-tu-cita.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> AGENDA TU CITA</a>
		<input id="cookieButton" name="cookieButton" type="checkbox" />
		<div id="cookieBar">
			<p class="no-margin">Este sitio web puede usar cookies para recordar tus datos de inicio de sesión, recopilar estadísticas para optimizar la funcionalidad del sitio.
				<label id="labelCookie" class="btn-cookie" for="cookieButton">ACEPTAR <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></label>
			</p>
		</div>
		<a class="btn-agendar" href="agenda-tu-cita.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> AGENDA TU CITA</a>
	</nav>
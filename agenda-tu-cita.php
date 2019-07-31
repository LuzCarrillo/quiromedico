<?php include('header.php') ;?>
<title>Agenda tu cita</title>
<meta name="description" content="Agenda tu cita online con el quiropráctico doctor Armando Baños y recibe un 10% de descuento en tu primer cita.">
<meta name="keywords" content="Agenda cita medica, cita medica, Doctor, quiropractico, tratamientos para hernias, Lesiones deportivas, tratamientos para deportistas, ciatica, dolor en la espalda"> 
<div class="banner banner-calendario">
	<div class="title-inteior">
		<h1>¡AGENDA TU CITA!</h1>
		<h2>Aprovecha el 7% de descuento en tu primer consulta</h2>
	</div>
</div>
<div class="container py-3 sh">
	<div id="pagina1" class="text-center">
		<div>
			<h3 class="gold marb-20">Elige el tipo de cita que requieres.</h3>
			<p>Puedes agendar tu cita con el especialista de tu preferencia en la clínica que más te convenga.</p>
		</div>
		<div class="col-md-8 col-md-offset-2"><div id="divContainerTipoCitas"></div></div>
	</div>
	<div id="pagina2" class="text-center">
		<div>
			<h3 class="gold marb-20">Selecciona la fecha de tu cita</h3>
			<p>Puedes elegir la que más te convenga.</p>
		</div>
		<div id="datepicker"></div>
		<input class="inputContacto" type="hidden" id="my_hidden_input" onchange="nSumaFecha(this.value)">
		<button type="button" class="btn-accent" onclick="obtenerFecha()">CONFIRMAR FECHA</button>
	</div>
	<div id="pagina3" class="text-center">
		<h3 class="gold marb-20">Escoje el horario para la consulta </h3>
		<p>Encuentra el horario que mas te convenga</p>
		<div class="col-md-8 col-md-offset-2"><div id="divContainerHorario"></div></div>
	</div>
	<div id="pagina4">
		<form class="form-horizontal" action="" method="post" id="reg_form" class="text-center">
			<h3 class="gold marb-20 text-center">Llene los siguientes campos.</h3>
			<fieldset class="col-xs-12 col-md-6 col-md-offset-3">
				<div class="form-group col-xs-12">
					<div class="inputGroupContainer">
						<div class="input-group" style="padding-bottom: 5px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user white"></i></span>
							<input id="nombreReserva" name="nombreReserva" placeholder="Nombre" class="form-control inputContacto" type="text">
						</div>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<div class="inputGroupContainer">
						<div class="input-group" style="padding-bottom: 5px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope white"></i></span>
							<input id="emailReserva" name="emailReserva" placeholder="Email" class="form-control inputContacto" type="email">
						</div>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<div class="inputGroupContainer">
						<div class="input-group" style="padding-bottom: 5px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-earphone white"></i></span>
							<input id="telefonoReserva" name="telefonoReserva" placeholder="Telefono" class="form-control inputContacto" type="tel">
						</div>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<div class="inputGroupContainer">
						<div class="input-group" style="padding-bottom: 5px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-send white"></i></span>
							<input id="comentariosReserva" name="comentariosReserva" placeholder="Comentarios" class="form-control inputContacto" type="text">
						</div>
					</div>
				</div>
			</fieldset>
			<div class="form-group col-xs-12">
				<p><strong>Condiciones de cita:</strong></p>
				<ul>
					<li>Promoción del 10% de descuento solo es válida en la primera cita.</li>
					<LI>El tiempo máximo de tolerancia es máximo de 10 minutos. </li>
				</ul>
			</div>
			<div class="col-xs-12 text-center">
				<div class="col-xs-12">
					<span class="left marr-10"><input id="condicionesReserva" name="condicionesReserva" type="checkbox"/>&nbsp;</span><p class="legal-txt left"> Acepto <a class="link-red" href="#" target="_blank">y he leído el <a class="link-red" href="#" target="_blank">Aviso de Privacidad.</a></p>
				</div>
				<button type="button" class="btn-accent" onclick="anteriorPagina3()">ATRÁS</button>
				<button type="submit" class="btn-accent">AGENDAR</button>
			</div>
		</form>
	</div>
</div>
<?php include('footer.php') ;?>
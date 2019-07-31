<?php include('header.php') ;?>
<title>Ver citas agendadas - QuiroMédico</title>
<div class="banner banner-calendario">
	<div class="title-inteior">
		<h1>CALENDARIO DE ACTIVIDADES</h1>
	</div>
</div>
<div class="container py-3">
	<div id="VerAgendaCitas1" class="text-center" data-aos="fade-down">
		<div>
			<h3 class="gold">Escoje tu fecha ver las citas actuales</h3>
		</div>
		<div id="datepickerAgendaCitas"></div>
		<input type="hidden" id="my_hidden_inputAgendaCitas" onchange="nSumaFecha(this.value)">
		<button class="btn-accent" type="button" onclick="obtenAgendaCitas()">ESCOJER FECHA</button>
	</div>
	<div id="VerAgendaCitas2" class="text-center">
		<div>
			<h3 class="gold">Escoje el horario para la consulta </h3>
		</div>
		<div id="divContainerAgendaCitasbtn"></div>
		<div id="divContainerAgendaCitasmdl"></div>
	</div>
	<div id="VerAgendaCitas3" class="text-center">
		<div>
			<h3 class="gold">Se actualizo Correctamente el estatus de la Cita</h3>
			<button class="btn-accent" value="Refresh Page" onClick="window.location.reload();">VER MAS CITAS</button>
		</div>
	</div>
</div>
<?php include('footer.php') ;?>
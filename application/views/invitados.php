<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/estilos.css">
	<title>Eres Un invitado</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid confirmacion">
			<div class="span2">
				<img src="<?php echo base_url()?>img/cigueña.png" alt="">
			</div>
			<input type="hidden" id="baseurl" value="<?php echo base_url()?>">
			<input type="hidden" id="invitado" value="<?php echo $invitado->id ?>">
			<div class="span8">
				<h1 class="amor">Hola <?php echo $invitado->prefijo .' '.$invitado->decariño.' '. $invitado->nombre?>, en este sitio puedes elegir tu regalo.</h1>
			</div>
			<div class="offset1 span1">
				<a id="confirmar" href="<?php echo base_url()?>login/logout" class="btn btn-small btn-inverse">Salir</a>
			</div>
		</div>
		<div id="porajax">

		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/regalos.js"></script>
</body>
</html>
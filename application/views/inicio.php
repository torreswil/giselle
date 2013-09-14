<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/estilos.css">
	<title>¡Hola soy Giselle!</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div class="fluid">
		<div class="row confirmacion">
			<div class="span6">
				<img src="img/cigueña.png" alt="Giselle">
			</div>
			<div class="span6">
				<h1 class="amor">¡Hola soy Giselle pronto estare con ustedes!</h1>
				<form method="post"action="<?php echo base_url().'login'?>" class="form-horizontal">
					<div class="control-group">
						<label class="control-label"for="codigo">Escribe tu codigo:</label>
						<div class="controls">
							<input type="text" name="codigo" id="txtcodigo">
							<input type="submit" value="Entrar" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
			<div class="span6">
				<iframe width="100%" height="320em" src="http://www.youtube.com/embed/RHevjlxQuhA?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url()?>js/javascript.js"></script>
</body>
</html>
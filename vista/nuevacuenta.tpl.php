<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/asdev.css">
</head>
<body>
	<?php include 'vista/headerlogin.tpl.php'; ?>
	<div class="wrap">
		<div class="container">
			<br>
			<form action="get">
				<div class="form-group">
					<label for="nombre">Nombre(s)</label>
					<input name="nombre" class="form-control" type="text" placeholder="Nombre">
					<label for="nombre">Apellido Paterno</label>
					<input name="apellidoP" class="form-control" type="text" placeholder="Apellido paterno">
					<label for="nombre">Apellido Materno</label>
					<input name="apellidoM" class="form-control" type="text" placeholder="Apellido paterno">
				</div>
				
				<div class="form-group">
					<label for="correo">Correo</label>
					<input class="form-control" name="correo" placeholder="Correo" type="email"></input>
					<label for="password">Contraseña</label>
					<input class="form-control" name="contrasena" placeholder="Contraseña" type="password"></input>
					
				</div>
				<button class="btn-primary">Enviar</button>
			</form>
		</div>
	</div>
	<?php include 'vista/footer.tpl.php';?>
	<script src="js/jquery-1.12.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/asdev.css">
	<style type="text/css">
		#accountForm {
			margin-top: 15px;
		}
	</style>
</head>

<body>
	<?php include 'vista/headerlogin.tpl.php'; ?>
	<div class="wrap">
		<div class="container-fluid">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#datos-personales1" data-toggle="tab">Datos Personales 1<i class="fa"></i></a></li>
				<li><a href="#datos-personales2" data-toggle="tab">Datos Personales 2 <i class="fa"></i></a></li>
				<li><a href="#formacion-academica" data-toggle="tab">Formación Academica<i class="fa"></i></a></li>
				<li><a href="#experiencia-laboral" data-toggle="tab">Experiencia Laboral<i class="fa"></i></a></li>
				<li><a href="#habilidades-personales" data-toggle="tab">Habilidades Personales<i class="fa"></i></a></li>
				<li><a href="#datos-interes" data-toggle="tab">Datos de Interes<i class="fa"></i></a></li>
				<li><a href="#idiomas" data-toggle="tab">Idiomas<i class="fa"></i></a></li>
			</ul>
		
			<form id="accountForm" method="get" class="form-horizontal">
				<div class="tab-content">
					<div class="tab-pane active" id="datos-personales1">
						<div class="form-group">
							<label class="col-xs-3 control-label" for="archivo">Cargar Foto de perfil</label>
							<div class="col-xs-5">
								<input type="file" class="form-control" name="direccionFotoPerfil" id="direccionFotoPerfil">
								<p class="help-block">Maximo 5MB</p>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-xs-3 control-label">Correo electronico</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="fullName" placeholder="correo@correo.com" />
							</div>
						</div>	
						<div class="form-group">
							<label class="col-xs-3 control-label">Nombre(s)</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="nombre" placeholder="Nombre" />
							</div>
						</div>	
						<div class="form-group">
							<label class="col-xs-3 control-label">Apellido Paterno</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="apellidoP" placeholder="Apellido Paterno" />
							</div>
						</div>	
						<div class="form-group">
							<label class="col-xs-3 control-label">Apellido Materno</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="apellidoM" placeholder="Apellido Materno" />
							</div>
						</div>	
						<div class="form-group">
							<label class="col-xs-3 control-label">Fecha de Nacimiento</label>
							<div class="col-xs-5">
								<input type="date" class="form-control" name="fechaNacimiento" placeholder="Fecha de Nacimiento" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Telefono Javascript</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="telefono" placeholder="telefono" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Titulo Personal</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="tituloPersonal" placeholder="Titulo Ej. Ing CIvil" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Objetivo Personal</label>
							<div class="col-xs-5">
								<textarea  maxlength="200" class="form-control" name="objetivoPersonal" form="accountForm" placeholder="Redacta tu objetivo personal maximo 200 caracteres" ></textarea>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="datos-personales2">
						<div class="form-group">
							<label class="col-xs-3 control-label">Calle</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="calle" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Colonia</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="colonia" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Numero</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="numero" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Entre calle:</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="entreCalle1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Y</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="entreCalle2" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Ciudad/Municipio</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="ciudadMunicipio" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Codigo Postal</label>
							<div class="col-xs-5">
								<input type="number" class="form-control" name="cp" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Estado</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="estado" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Nacionalidad</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="nacionalidad" />
							</div>
						</div>

						
					</div>
					<div class="tab-pane" id="formacion-academica">
						<div class="form-group">
							<label class="col-xs-3 control-label">Tipo de Formación</label>
							<div class="col-xs-5">
								<select class="form-control" name="tipoFormacionAcademica" id="option">
									<option value="primaria">Primaria</option>
									<option value="secundaria">Secundaria</option>
									<option value="bachillerato">Bachillerato</option>
									<option value="carrera">Carrera</option>
									<option value="maestria">Maestria</option>
									<option value=""doctorado>Doctorado</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Nombre de la Institución</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="tipoNombreInstitucion" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Fecha de Ingreso</label>
							<div class="col-xs-5">
								<input type="date" class="form-control" name="fechaIngresoFA" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Fecha de Egreso</label>
							<div class="col-xs-5">
								<input type="date" class="form-control" name="fechaEgresoFA" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Certificación</label>
							<div class="col-sm-1">
								<input type="checkbox" class="form-control" name="certificacion" />
							</div>
						</div>
					</div>
					<div class="tab-pane" id="experiencia-laboral">
						<div class="form-group">
							<label class="col-xs-3 control-label">Nombre de la Empresa</label>
							<div class="col-xs-5">
								<input type="text" class="form-control" name="nombreEmpresa" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Actividades Realizadas</label>
							<div class="col-xs-5">
								<textarea  maxlength="250" class="form-control" name="actividadesRealizadas" form="accountForm" placeholder="Redacta tus actividadesRealizadas, maximo 250 caracteres" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Fecha de ingreso</label>
							<div class="col-xs-5">
								<input type="date" class="form-control" name="fechaIngresoEL" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Fecha de egreso</label>
							<div class="col-xs-5">
								<input type="date" class="form-control" name="fechaEgresoEL" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-3 control-label">Carta recomendacion</label>
							<div class="col-sm-1">
								<input type="checkbox" class="form-control" name="cartaRecomendacion" />
							</div>
						</div>
					</div>
					<div class="tab-pane" id="habilidades-personales">
					<div class="form-group">
						<label class="col-xs-3 control-label">Nombre de la habilidad</label>
						<div class="col-xs-5">
							<input type="text" class="form-control" name="nombreHabilidad" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-3 control-label">Nivel de la habilidad</label>
						<div class="col-xs-5">
							<input type="text" class="form-control" name="nivelHabilidad" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-3 control-label">Tiempo de experiencia</label>
						<div class="col-xs-5">
							<input type="date" class="form-control" name="tiempoExperiencia" />
						</div>
					</div>
						
					</div>
					<div class="tab-pane" id="datos-interes">
						<div class="form-group">
							<label class="col-xs-3 control-label">Tipo de Formación</label>
							<div class="col-xs-5">
								<select class="form-control" name="tipoFormacionAcademica" id="option">
									<option value="primaria">Primaria</option>
									<option value="secundaria">Secundaria</option>
									<option value="bachillerato">Bachillerato</option>
									<option value="carrera">Carrera</option>
									<option value="maestria">Maestria</option>
									<option value=""doctorado>Doctorado</option>
								</select>
							</div>
							<div class="col-xs-4">
								<select class="form-control" name="tipoFormacionAcademica" id="option">
									<option value="primaria">Primaria</option>
									<option value="secundaria">Secundaria</option>
									<option value="bachillerato">Bachillerato</option>
									<option value="carrera">Carrera</option>
									<option value="maestria">Maestria</option>
									<option value=""doctorado>Doctorado</option>
								</select>
							</div>
							
						</div>
					</div>
					<div class="tab-pane" id="idiomas">
					
					
					</div>
					<div class="form-group" style="margin-top: 15px;">
						<div class="col-xs-5 col-xs-offset-3">
							<button type="submit" class="btn btn-default">Validate</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include 'vista/footer.tpl.php';?>
	<script src="js/jquery-1.12.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
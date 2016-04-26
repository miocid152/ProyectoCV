<?php 

	function conectarse() {
		$servidor ="sql104.byethost8.com";
		$usuario="b8_17890193";
		$password="46122816lomen";
		$bd="proyectocv";

		$conectar = new mysqli($servidor,$usuario,$password,$bd);
		return $conectar;
	}


	$conexiondb = conectarse();
	$conexiondblog = conectarse2();

?>
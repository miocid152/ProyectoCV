<?php
	function view($template, $vars = array()) {
		extract($vars);
		require "vista/$template.tpl.php";
	}

	function controller($name) {
		if (empty($name)) {
			$name = "index";
		}

		/*if ($name == "mysqladmin") {
			header("Location: mysqladmin/index.php");
		}*/

		$file = "controladores/$name.php";
		if (file_exists($file)) {
			require $file;
		} else {
			/*header("HTTP/1.0 404 Not Found");
			exit("Pagina no encontrada");*/
			require "vista/404.tpl.php";
		}

	}


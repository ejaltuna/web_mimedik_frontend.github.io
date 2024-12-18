<?php

// Obtener el host de la solicitud
$host = $_SERVER['HTTP_HOST'];

if (1 == 1) {
	// $variable=addslashes(trim($_GET['seguridad']));

	if (2 == 2) {



		// Condicionar según el host
		if ($host === 'localhost' || $host === '127.0.0.1') {
			// Código para localhost
			// echo "Estás en localhost.";
			$hostname = "localhost";
			$username = "root";
			$password = "";
			$database = "mimedik";
			$mysqli = new mysqli($hostname, $username, $password, $database, 3306);



			if ($mysqli->connect_errno) {

				die("Fallo la conexio: (" . $mysqli->mysqli_connect_errno()

					. ") " . $mysqli->mysqli_connect_error());
			} else {

				echo "";
			}
		} elseif (filter_var($host, FILTER_VALIDATE_IP)) {
			// Código para IP
			$hostname = "iphglobal.info";
			$username = "iphgloba_safi";
			$password = "3(b)T58wEk0dGC";
			$database = "mimedik";
			$mysqli = new mysqli($hostname, $username, $password, $database, 3306);



			if ($mysqli->connect_errno) {

				die("Fallo la conexio: (" . $mysqli->mysqli_connect_errno()

					. ") " . $mysqli->mysqli_connect_error());
			} else {

				echo "";
			}
			// echo "Accediendo a través de una dirección IP: $host";
		} else {
			$hostname = "iphglobal.info";
			$username = "iphgloba_safi";
			$password = "3(b)T58wEk0dGC";
			$database = "mimedik";
			$mysqli = new mysqli($hostname, $username, $password, $database, 3306);



			if ($mysqli->connect_errno) {

				die("Fallo la conexio: (" . $mysqli->mysqli_connect_errno()

					. ") " . $mysqli->mysqli_connect_error());
			} else {

				echo "";
			}
			// Código para otros casos
			echo "Accediendo desde un dominio: $host";
		}

		// $hostname = "iphglobal.info";
		// $username = "iphgloba_safi";
		// $password = "3(b)T58wEk0dGC";
		// $database = "mimedik";



	} else {
		die("Fallo la conexion parametro invalido: 1 ");
	}
} else {
	die("Fallo la conexion parametro invalido: 2 ");
}

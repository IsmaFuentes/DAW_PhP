<!DOCTYPE html>
<html>
	<head>
		<title>Control de acceso</title>
	</head>

	<body>
		<?php
			echo "Usuario: ".$_SERVER['PHP_AUTH_USER'];//Usuario
			echo "<br>";
			echo "Autenticación: ".$_SERVER['AUTH_TYPE'];//Aunteticación
			//$_SERVER['PHP_AUTH_PW'] -->contraseña
			if(!isset($_SERVER['PHP_AUTH_USER'])){
				header('www-authenticate: Basic Realm="usuarios"');
				header('HTTP/1.0 401 Unauthorized');
				echo "Usuario no reconocido!";
				exit;
			}
		?>
	</body>
</html>
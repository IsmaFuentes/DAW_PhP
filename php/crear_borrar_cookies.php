<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cookies</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<?php
			//borramos la cookie
			if(isset($_POST['borrar'])){
				//setcookie("usuario", "ismael", time() - 3600);
				unset($_COOKIE['cookie']);
			}
			//creamos la cookie
			if(isset($_POST['crear'])){
				setcookie("usuario", "ismael", time() + 3600);
			}
		?>

		<form method="POST">
			<input type="submit" name="crear" value="crear cookie">
			<input type="submit" name="borrar" value="borrar cookie">
		</form>

		<?php
		//muestra el contenido de la cookie
			if(isset($_COOKIE['cookie'])){
				$contenido = $_COOKIE["cookie"];
				echo "el valor de la cookie es: ".$contenido;
			}
			else{
				echo "no hay cookies";
			}
		?>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Adivina el número</title>
	</head>

	<body>

		<?php
			/*
			*cada vez que se hace una petición se guarda 
			*el primer número aleatorio que se ha generado
			*/
			if(isset($_POST["numero"])){
				$numero = $_POST["numero"];
			}else{
				//número aleatorio entre 1 y 50
				$numero = rand(1,50);
			}
		?>

		<h2>¡Adivina el número!</h2>
		<form method="POST" name="adivina-el-numero">
			<p>Introduce un número entre 1 y 50:</p>
			<input type="text" name="adivina" id="adivina">
			<!--El número generado aleatoriamente se guarda en este input oculto-->
			<input type="hidden" name="numero" value="<?= $numero ?>">
			<input type="submit" name="submit">
		</form><br>

		<form method="POST" name="nuevo-numero">
			<input type="submit" name="submit" value="Reinicia">
		</form>

		<?php
			if(isset($_POST["adivina"])){
				if($_POST["adivina"]){
					$adivina = $_POST["adivina"];
					$numero = $_POST["numero"];

					if($adivina < $numero){//si el valor introducido es menor
						echo "<p>introduce un número más grande.</p>";
					}
					else if ($adivina > $numero){//si el valor introducido es mayor
						echo "<p>introduce un número más pequeño.</p>";
					}
					else if($adivina == $numero){//si el valor introducido es igual al número
						echo "<p>¡correcto! el número era: ".$numero."</p>";
					}					
				}
			}
		?>

	</body>
</html>
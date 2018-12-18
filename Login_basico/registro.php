<!DOCTYPE html>
<html>
	<head>
		<title>Registro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<!-- Librerias -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<!--Font awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--css-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<!--Navbar-->
		<nav class="navbar navbar-expand-md bg-light navbar-light">
		  <a class="navbar-brand" href="index.php">MyComunity</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Gestión</a>
		      </li>  
		    </ul>
		  </div>  
		</nav>
		
		<!--Formulario-->
		<?php
		//si pulsamos "registrar" se ejecuta el siguiente código
			if(isset($_POST['registrar'])){
				//inicializamos las variables
				$usuario = $_POST['nombre'];//guarda el campo nombre
				$pass = $_POST['contraseña'];//guarda el campo contraseña
				$email = $_POST['email'];//guarda el campo email

				//se realiza la conexión a la base de datos
				require_once('conexion.php');
				//se realiza la consulta
				require_once('newusuario.php');

				echo "<div class='alert alert-success' role='alert'>";
					echo "Usuario creado correctamente";
				echo "</div>";

				//vaciamos el array $_POST para evitar generar usuarios duplicados al refrescar la página
				$_POST = array();
			}
		?>

		<div class="container">
			<br>
		  	<h2>Formulario de registro</h2>
			<form method="POST">

		    <div class="form-group">
		    	<label for="nombre">Nombre de usuario:</label>
		      	<input type="nombre" class="form-control" id="nombre" name="nombre">
		    </div>

		    <div class="form-group">
		      	<label for="contraseña">Contraseña:</label>
		      	<input type="contraseña" class="form-control" id="contraseña" name="contraseña">
		    </div>

		    <div class="form-group">
		      	<label for="email">E-mail:</label>
		      	<input type="email" class="form-control" id="email" name="email">
		    </div>
		    
		    <!--Registro-->
		    <input type="submit" class="btn btn-primary" value="Registrar" name="registrar"></input>
		    <!--Volver atrás-->
			<a href="login.php" class="btn btn-danger"><span>Volver</span> </a>
		  </form>
		</div>

	</body>

</html>
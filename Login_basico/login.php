<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
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
		<link rel="stylesheet" type="text/css" href="css/login.css">
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
		<!--Gestión del login-->
		<?php
			//session_start();
			if(isset($_POST['login'])){
				//guardamos el nuestras credenciales en las siguientes variables
				$usuario = $_POST['usuario'];
				$contraseña = $_POST['pass'];
				//realizamos la conexión
				require_once('conexion.php');
				//comprobamos si el usuario y contraseña existen
				require_once('consultas.php');
				/*
				* Si el campo count vale 1 significa que hay un usuario con esa contraseña dado de alta
				* la variable $esadmin comprueba los derechos del usuario
				*/
				if($count =="1" && $esadmin==false){
					//entramos en la página de usuario habitual
					$_SESSION['usuario']=$usuario;
					header('Location: usuario.php');
				}
				else if($count =="1" && $esadmin==true){
					//entramos en la página de usuario administrador
					$_SESSION['admin']=$usuario;
					header('Location: admin/admin.php');
				}
				else{
					//en caso de no encontrar usuario, aparece un alert
					echo "<div class='alert alert-danger' role='alert'>";
						echo "Por favor, introduce un usuario y contraseña válidos.";
					echo "</div>";
				}
			}
		?>
        <!--Login-->
        <div id="contenedor">
            <form method="POST">
				<div class="imgcontainer">
					<img src="img/login-icon.png" alt="Avatar" class="avatar">
				</div>

				<div class="container">
					<label for="uname"><b>Usuario</b></label>
					<input type="text" placeholder="Usuario" name="usuario" required>

					<label for="pass"><b>Contraseña</b></label>
					<input type="password" placeholder="Contraseña" name="pass" required>

					<input type="submit" name="login" value="Login" id="login">

					<label>
						<input type="checkbox" checked="checked" name="remember"> Guardar
					</label>
				</div>

				<div class="container" style="background-color:#f1f1f1">
					<a href="registro.php" class="btn btn-info">
			          <span>¡Registrate!</span> 
			        </a>
					<span class="psw">¿Has perdido la <a href="#">contraseña?</a></span>
				</div>
			</form>	
		</div>		
	</body>
</html>
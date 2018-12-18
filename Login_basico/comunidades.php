<!DOCTYPE html>
<html>
	<head>
		<title>Gestión de comunidades</title>
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
		  <a class="navbar-brand" href="#">MyComunity</a>
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

		    <ul class="navbar-nav right ml-auto">
		      <li class="nav-item" id="login">
		        <a href="#" class="btn btn-info">
		          <span>Login</span> 
		        </a>
		      </li> 
		    </ul>
		  </div>  
		</nav>
		
		<!--Formulario-->

		<div class="container">
		  <h2>Datos de la comunidad de propietarios</h2>
		  <form action="/action_page.php">

		    <div class="form-group">
		      <label for="denominacion">Denominación:</label>
		      <input type="denominacion" class="form-control" id="denominacion" name="denominacion">
		    </div>

		    <div class="form-group">
		      <label for="CIF">CIF:</label>
		      <input type="CIF" class="form-control" id="CIF" name="CIF">
		    </div>

	   		<div class="form-group">
		      <label for="direccion">Dirección:</label>
		      <textarea type="direccion" class="form-control" id="direccion" name="direccion"></textarea>
		    </div>
		    
			<div class="form-group">
			   <label for="file">Imagen:</label>
			   <input type="file" class="form-control-file" id="file">
			   <label class="form-group-label" for="file"></label>
			</div>

		    <button type="submit" class="btn btn-primary">Guarda</button>
		  </form>
		</div>

	</body>

</html>
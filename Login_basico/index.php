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
		<link rel="stylesheet" type="text/css" href="css/login.css">
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
		      <li class="nav-item" id="loginform">
		        <a href="login.php" class="btn btn-info">
		          <span>Login</span> 
		        </a>
		      </li> 
		    </ul>
		  </div>  
		</nav>
		
		<!--Carousel-->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="img/slide1.png" alt="First slide" width="1400" height="500">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/slide2.png" alt="Second slide" width="1400" height="500">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide" width="1400" height="500">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div class="jumbotron text-center" id="footer">
		  <p>¡Siguenos!</p>
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-google"></a>
		</div>
	</body>

</html>
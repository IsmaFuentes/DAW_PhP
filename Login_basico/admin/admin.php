<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Página del usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Librerias -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!--Font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--css-->
        <link rel="stylesheet" type="text/css" href="../css/login.css">
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

        <div class="user">
            <?php
                //session_start();
                echo "<div id='panel'";
                    echo "<h4>Panel del administrador</h4><br>";
                    echo $_SESSION['admin'];
                    echo "<br>";
                    echo "<img src='../img/login-icon.png' id='userimg'>";
                echo "</div>";
                
                if(isset($_POST['logout'])){
                    session_start();
                    session_destroy();
                    header('Location: ../login.php');
                }
            ?>
            <form method="POST">
                <input type="submit" name="logout" value="Cerrar" id="logoutbtn">
            </form>
        </div>

        <div class="admininfo">
            <h4>Usuarios registrados</h4>
            <?php
				//realizamos la conexión
                require_once('../conexion.php');
                //ejecutamos la consulta
                $query = $con->prepare(
                    "SELECT id, usuario, access_level,email
                    FROM usuarios 
                    ORDER BY id");
                $query->execute();

                $num = $query->rowCount();

                //Construimos la tabla de usuarios
                echo "<table class='table table-hover table-responsive table-bordered' id='table'>";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Nombre</th>";
                        echo "<th>Nivel de acceso</th>";
                        echo "<th>E-Mail</th>";
                        echo "<th>Opciones</th>";
                    echo "</tr>";

                    while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                        extract($row);
                        echo "<tr>";
                            echo "<td>{$id}</td>";
                            echo "<td>{$usuario}</td>";
                            echo "<td>{$access_level}</td>";
                            echo "<td>{$email}</td>";
                            echo "<td>";
                            //editar campos
                            echo "<a href='#' class='btn btn-primary m-r-1em'>Editar</a>";
                            //eliminar campos
                            echo "<a href='#' class='btn btn-danger'>Borrar</a>";
                        echo "</td>";
                    echo "<tr>";
                    }
                echo "</table>";
            ?>
        </div>
    </body>
</html>
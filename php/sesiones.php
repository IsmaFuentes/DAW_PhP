<!DOCTYPE html>
<html>

	<body>
		<?php
		//cuenta las veces que hemos entrado en la página
		session_start();

		if(isset($_SESSION["contador"])){
			$_SESSION["contador"] = $_SESSION["contador"]+1;
		}else{
			$_SESSION["contador"] = 1;
		}
		echo "Te has conectado ".$_SESSION["contador"]." veces";

		//session_destroy() -> elimina las sesiones
		?>
	</body>

</html>



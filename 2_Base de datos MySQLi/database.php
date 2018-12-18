<?php
	//conexión a la base de datos con MySQLI
	$mysqli = new mysqli("localhost", "root", "", "php_beginner_crud_level_1");

	//comprueba la conexión

	if(mysqli_connect_errno()){
		printf("connect failed");
		exit();
	}

?>
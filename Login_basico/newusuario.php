<?php
	//sentencia insert que creará el nuevo usuario en la base de datos
	$query = $con->prepare(
			"INSERT INTO usuarios (usuario, clave, email)
			 VALUES (:usuario, :password, :email)");

	//damos valor a los parámetros establecidos en nuestro insert
	$query->bindParam(':usuario',$usuario);
	$query->bindParam(':password',$pass);
	$query->bindParam(':email',$email);

	//ejecutamos la consulta
	$query->execute();

?>
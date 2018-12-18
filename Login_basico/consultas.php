<?php

	//comprobamos si el usuario y contraseña existen
	$query = $con->prepare(
		"SELECT COUNT(id)
		FROM usuarios 
		WHERE usuario='$usuario'
		AND clave='$contraseña'");
	$query->execute();
		
	$count = $query->fetchColumn();

	//comprobamos si el usuario es administrador
	$query2 = $con->prepare(
		"SELECT access_level
		FROM usuarios 
		WHERE usuario='$usuario'
		AND clave='$contraseña'");
	$query2->execute();

	$esadmin = $query2->fetchColumn();

?>
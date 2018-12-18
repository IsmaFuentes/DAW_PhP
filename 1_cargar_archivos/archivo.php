<?php

	$nombre_archivo = $_FILES["archivo"]["name"];
	$directorio = "archivos/";

	if(isset($_POST["subeArchivo"])){
		move_uploaded_file(($_FILES["archivo"]["tmp_name"]), $directorio.$nombre_archivo);

		echo "<p>Archivo subido con éxito a ".$directorio."</p>";
		echo '<img src="'.$directorio.$nombre_archivo.'">';
	}
?>	
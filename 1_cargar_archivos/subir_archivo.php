<!DOCTYPE html>
<html>
	<head>
		<title>Subir archivos con PhP</title>
	</head>

	<body>
		<h3>Selector de archivos</h3>
		<form method="POST" enctype="multipart/form-data" action="archivo.php">
			<label for="archivo"></label>
			<input type="file" name="archivo" id="archivo" value="">
			<br><br>
			<input type="submit" name="subeArchivo">
		</form>	

	</body>
</html>
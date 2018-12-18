<!DOCTYPE html>
<html>

	<body>
		<?php
		//contador de cookies
			if(isset($_COOKIE['cookie'])){
				$contador = ++$_COOKIE['cookie'];
				setcookie('cookie',$contador);
				echo $_COOKIE['cookie'];
			}else{
				$contador = 0;
				setcookie("cookie", $contador, time() + 60 *60 * 24 * 365);
			}
		?>

	</body>

</html>
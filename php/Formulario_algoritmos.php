<!DOCTYPE html>
<html>
	<head>
		<title>Algoritmos en PhP</title>
	</head>

	<body align=center>

	<!--Funciones y algoritmos-->
		<?php
		/**
		* @author Ismael Fuentes
		*/

			//variable global que hace referencia a los valores del array aleatorio:
			global $aleatorio;
			//matriz precargada:
			$precargada = array(10,9,8,7,6,5,4,3,2,1);

			/**
			* Función que crea nuestro array.
			* @param $max - máximo de elementos a generar.
			* @return $array - devuelve el array generado.
			*/
			function newArray($max){
				$array = array();
				for($i = 0; $i < $max; $i++){
					//números aleatorios entre 1 y 99
					$aleatorio = rand(1,99);
					array_push($array, $aleatorio);
				}
				return $array;
			}

			//métodos de ordenación (burbuja, intercambio e inserción directa)

			/**
			* Método de ordenación burbuja.
			* @param $Array - array que queremos ordenar.
			* @return $Array - devuelve el array ordenado.
			*/
		    function burbuja($Array){
		    	//con el bucle while y la variable $ordenado evitamos que de vueltas de más
		        $ordenado = false;
		        while(!$ordenado){
		            $ordenado = true;
		            for($i = 1; $i < count($Array); $i++){
		                if($Array[$i] < $Array[$i-1]){
		                    $aux = $Array[$i]; 
		                    $Array[$i] = $Array[$i-1]; 
		                    $Array[$i-1] = $aux;
		                    $ordenado = false;
		                }
		            }
		        }
		        return $Array;
		    }

			/**
			* Método de ordenación por intercambio.
			* @param $Array - array que queremos ordenar.
			* @return $Array - devuelve el array ordenado.
			*/
		    function intercambio($Array){
		    	for($i = 0; $i < count($Array)-1; $i++){
		    		for($j = $i+1; $j < count($Array); $j++){
		    			if($Array[$i] > $Array[$j]){
		    				$aux = $Array[$i];
		    				$Array[$i] = $Array[$j];
		    				$Array[$j] = $aux;
		    			}
		    		}
		    	}
		    	return $Array;
		    }

			/**
			* Método de ordenación por inserción directa.
			* @param $Array - array que queremos ordenar.
			* @return $Array - devuelve el array ordenado.
			*/
			function insercionDirecta($Array){
				for($i = 1; $i < count($Array); $i++){
					$v = $Array[$i];
					$j = $i - 1;
					while($j >= 0 && $Array[$j] > $v){
						$Array[$j +1] = $Array[$j];
						$j --;
					}
					$Array[$j +1] = $v;
				}
				return $Array;
			}


			/**
			* Métodos que imprimen los arrays según el método de ordenación.
			* @param $Array - array que queremos ordenar.
			*/
		    function imprimirBurbuja(&$array){
		        $resultado = burbuja($array);
		        for($i = 0; $i < count($resultado); $i++){
		            echo $resultado[$i]."\n";
		        }
		    }

		    function imprimirIntercambio(&$array){
		    	$resultado = intercambio($array);
		    	for($i = 0; $i < count($resultado); $i++){
		    		echo $resultado[$i]."\n";
		    	}
		    }

		    function imprimirInsDirecta(&$array){
		    	$resultado = insercionDirecta($array);
		    	for($i = 0; $i < count($resultado); $i++){
		    		echo $resultado[$i]."\n";
		    	}
		    }
		?>

		<!--Formulario matriz aleatoria-->
		<div>
			<br>
			<h3>Métodos de ordenación</h3><hr>
			<form method="post">
				<p>Matriz aleatoria - Introduce el numero de elementos a generar y selecciona un método.</p>
				<input type="number" min="5" max="20" name="maximo">
				<select name="selector">
					<option></option>
					<option value="op1">burbuja</option>
					<option value="op2">intercambio</option>
					<option value="op3">ins. directa</option>
				</select>
				<input type="submit" value="envia">
			</form>

			<?php
				//Eventos del selector
				if(isset($_POST['maximo'])){
					//creamos un array con un máximo de numeros dados por parámetro
					$aleatorio = newArray($_POST['maximo']);
					
					//Opción 1 - Método burbuja
					if('op1' == $_POST['selector']){ 
					    echo "<br>Burbuja: ";
					    imprimirBurbuja($aleatorio);
					} 
					//Opción 2 - Método intercambio
					else if('op2' == $_POST['selector']){ 
					    echo "<br>Intercambio: ";
					    imprimirIntercambio($aleatorio);
					} 
					//Opción 3 - Método inserción directa
					else if('op3' == $_POST['selector']){
						echo "<br>Inserción directa: ";
				    	imprimirInsDirecta($aleatorio);
					}
				}
				//Al pulsar sobre el submit con una de las opciones seleccionadas
				//estas llamarán a los métodos de ordenación e imprimirán los
				//arrays ordenados.
			?>

			<!--Formulario matriz precargada-->
			<form method="post">
				<br>
				<p>Matriz precargada - Selecciona un método</p>
				<select name="selector2">
					<option></option>
					<option value="op1">burbuja</option>
					<option value="op2">intercambio</option>
					<option value="op3">ins. directa</option>
				</select>
				<input type="submit" value="envia">
			</form>

			<?php
				//Opción 1 - Método burbuja
				if(isset($_POST['selector2']) && 'op1' == $_POST['selector2']){ 
					echo "<br>Burbuja: ";
					imprimirBurbuja($precargada);
				} 
				//Opción 2 - Método intercambio
				else if(isset($_POST['selector2']) && 'op2' == $_POST['selector2']){ 
					echo "<br>Intercambio: ";
					imprimirIntercambio($precargada);
				} 
				//Opción 3 - Método inserción directa
				else if(isset($_POST['selector2']) && 'op3' == $_POST['selector2']){
					echo "<br>Inserción directa: ";
				    imprimirInsDirecta($precargada);
				}
			?>

			<!--Formulario matriz por teclado-->
			<form method="post">
				<br>
				<p>Matriz por teclado - Selecciona un método</p>
				<input type="text" name="teclado" placeholder="ejemplo: 5,4,3,2,1,0">
				<select name="selector3">
					<option></option>
					<option value="op1">burbuja</option>
					<option value="op2">intercambio</option>
					<option value="op3">ins. directa</option>
				</select>
				<input type="submit" value="envia">

				<?php
					//Eventos del selector
					if(isset($_POST['teclado'])){
						$teclado =  $_POST["teclado"];
						$arrayTeclado = explode(",",$teclado);

						//Opción 1 - Método burbuja
						if('op1' == $_POST['selector3']){ 
						    echo "<br><br>Burbuja: ";
						    imprimirBurbuja($arrayTeclado);
						} 
						//Opción 2 - Método intercambio
						else if('op2' == $_POST['selector3']){ 
						    echo "<br><br>Intercambio: ";
						    imprimirIntercambio($arrayTeclado);
						} 
						//Opción 3 - Método inserción directa
						else if('op3' == $_POST['selector3']){
							echo "<br><br>Inserción directa: ";
					    	imprimirInsDirecta($arrayTeclado);
						}
					}	
				?>
			</form>
		</div>
	</body>
</html>
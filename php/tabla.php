<!DOCTYPE html>
<html>
	<head>
		<title>Estado de $var</title>

		<style>
		table, th, td {border: 1px solid black;border-collapse: collapse;}
		th, td {padding: 5px;text-align: left;}
		</style>
	</head>

	<body>
		<h1>Estado de $var</h1>
			<div>
				<table>
				  <tr>
				    <th>Contenido de $var</th>
				    <th>isset ($var)</th> 
				    <th>empty ($var)</th>
				    <th>(bool) $var</th> 
				  </tr>
				  	<?php
				  	
				  		$var = array(null,0,true,false,"0","","foo",array(),uns());
				  		$varStrings = array("null","0","true","false","0",'""','"foo"',"array()",'unset($array)');

				  		function uns(){
				  			unset($var);
				  		}

				  		function iset($var){
				  			if(isset($var)){
				  				echo "true";
				  			}else {
				  				echo "false";
				  			}
				  		}

				  		function empt($var){
				  			if(empty($var)){
				  				echo "true";
				  			}else{
				  				echo "false";
				  			}
				  		}

				  		function boolean($var){
				  			if((bool) $var){
				  				echo "true";
				  			}else{
				  				echo "false";
				  			}
				  		}

				  		for($i = 0; $i < count($var); $i++){
				  			echo "<tr> <td>";
				  			echo "var = ";
				  			echo $varStrings[$i]."</td>";
				  			echo "<td>";
				  			echo iset($var[$i])."</td>";
				  			echo "<td>";
				  			echo empt($var[$i])."</td>";
				  			echo "<td>";
				  			echo boolean($var[$i])."</td>";
				  		}

					?>
				</table>
			</div>
	</body>
</html>
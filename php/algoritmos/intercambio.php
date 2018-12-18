<?php 
	echo "<h1>Método intercambio</h1><hr>";

	function intercambio($Array){
		for($i = 0; $i < count($Array)-1; $i++){
			for($j = $i+1; $j <= count($Array)-1; $j++){
				if($Array[$i] > $Array[$j]){
					$aux = $Array[$i];
					$Array[$i] = $Array[$j];
					$Array[$j] = $aux;
				}
			}
		}
		return $Array;
	}

    function main(){
        $array = array(13,5,4,3,14,2,15,1,10,6,8,7,9,11,12,16);
        $resultado = intercambio($array);
        for($i = 0; $i < count($resultado); $i++){
            echo $resultado[$i]."\n";
        }
    }
    main();
?>
<?php 
	echo "<h1>Método Insercion directa</h1><hr>";

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

    function main(){
        $array = array(10,9,8,7,6,5,4,3,2,1);
        $resultado = insercionDirecta($array);
        for($i = 0; $i < count($resultado); $i++){
            echo $resultado[$i]."\n";
        }
    }
    main();
?>
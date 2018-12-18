<?php
	echo "<h1>Método burbuja</h1><hr>";
    
    function burbuja($Array){
        for($i = 1; $i < count($Array); $i++){
            for($j = 0; $j < count($Array)-$i; $j++){
                if($Array[$j] > $Array[$j+1]){
                    $aux = $Array[$j+1]; 
                    $Array[$j+1] = $Array[$j]; 
                    $Array[$j] = $aux;
                }
            }
        }
        return $Array;
    }

    function main(){
        $array = array(13,5,4,3,14,2,15,1,10,6,8,7,9,11,12);
        $resultado = burbuja($array);
        for($i = 0; $i < count($resultado); $i++){
            echo $resultado[$i]."\n";
        }
    }
    main();
?>
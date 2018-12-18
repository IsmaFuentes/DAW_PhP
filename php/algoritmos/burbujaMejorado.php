<?php
	echo "<h1>Método burbuja optimizado</h1><hr>";
    
    function burbuja($Array){
        $ordenado = false;
        while(!$ordenado){
            //$largoArray = count($Array);
            //sustituimos count($Array) por $largoArray en el bucle
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

    function main(){
        $array = array(13,5,4,3,14,2,15,1,10,6,8,7,9,11,12);
        $resultado = burbuja($array);
        for($i = 0; $i < count($resultado); $i++){
            echo $resultado[$i]."\n";
        }
    }
    main();
?>
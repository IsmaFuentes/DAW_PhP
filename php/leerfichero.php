<?php
/*
    método sencillo que realiza la lectura de un archivo
    $lineas = file("C:\Users\usuario\Desktop\array.txt");

    foreach($lineas as $linea){
       echo htmlspecialchars($linea)."<br>";
    }
    */

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Leer fichero</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <form method="POST">
            <input type="file" name="file">
            <br><br>
            <input type="submit" value="Visualiza">
            <br><br>
        </form>

        <?php
            //declaramos nuestro $array global
            global $array;

            //configuramos el algoritmo que ordenará el array
            function burbuja($array){
                $boolean = true;
                while($boolean){
                    $boolean = false;
                    for($i = 1; $i < count($array); $i++){
                        if($array[$i] < $array[$i-1]){
                            $aux = $array[$i];
                            $array[$i] = $array[$i-1];
                            $array[$i-1] = $aux;
                            $boolean = true;
                        }
                    }
                }
                return $array;
            }
            //función que imprimirá el array
            function imprimir($array){
                $resultado = burbuja($array);
                for($i = 0; $i < count($resultado); $i++){
                    echo $resultado[$i]."\n";
                }
            }

            //ruta desde la que seleccionamos los archivos
            $ruta = "C:/Users/usuario/Desktop/";

            //si el archivo está seleccionado
            if(isset($_POST['file'])){
                $lineas = file($ruta . $_POST['file']);
                //lectura del fichero
                foreach($lineas as $linea){
                    $array = explode(",",$linea);    
                }
                echo "<hr>";
                //imprimimos el array ordenado
                imprimir($array);
            }
        ?>

    </body>
</html>

<?php
/*
function burbuja($array){
    $boolean = true;
    while($boolean){
        $boolean = false;
        for($i = 1; $i < count($array); $i++){
            if($array[$i] < $array[$i-1]){
                $aux = $array[$i];
                $array[$i] = $array[$i-1];
                $array[$i-1] = $aux;
                $boolean = true;
            }
        }
    }
    return $array;
}
*/
?>
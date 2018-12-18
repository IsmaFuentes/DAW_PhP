<?php
    //conexión a la base de datos
    $host = "randion.es";
    $db_name = "daw2a_comunidades";
    $username = "daw2a";
    $password = "abc123.";
        
    try {
         $con = new PDO("pgsql:host={$host};dbname={$db_name}", $username, $password);
    }
    catch(PDOException $exception){
        echo "Error de conexión: " .$exception->getMessage();
    }     
?>
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
        echo "Connection error: " .$exception->getMessage();
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Titulo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <?php
            if($_POST){
                try{
                    //sentencia sql
                    $query = "INSERT INTO cuentas (iban) VALUES(:iban)";

                    $stmt = $con->prepare($query);
                    $iban=htmlspecialchars(strip_tags($_POST['iban']));
                    $stmt->bindParam(':iban', $iban);

                }
                catch(PDOException $exception){
                    die('ERROR: ' . $exception->getMessage());
                }
            }
        ?>

        <h3>Introduce campos:</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            IBAN: <input type="text" name="iban" placeholder="1111-2222-3333-4444">
            <input type="submit" name="envia">
            <br><br>
        </form>

        <?php
            //Ejecutamos la consulta
            if($stmt->execute()){
                echo "Datos introducidos correctamente";
            }else{
                echo "No ha sido posible introducir los datos";
            }
        ?>
    </body>

</html>
<?php
    if(isset($_POST['number'])) {
        $number = $_POST['number'];
    } else {
        $number = rand(1,50);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Adivina un numero</title>
    </head>

    <body>
        <h2>Adivina un número entre 1 y 50</h2>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" name="guess-a-number">
            <p>Introduce un número</p>
            <input type="text" id="guess" name="guess" />
            <input name="number" type="hidden" value="<?= $number ?>" />
            <input name="submit" type="submit" value="Prueba suerte!" />
        </form>

        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" name="new-number">
            <input name="submit" type="submit" value="Reiniciar" />
        </form>

        <?php
        if(isset($_POST['guess'])){
            if($_POST["guess"]){
                $guess  = $_POST['guess'];
                $number  = $_POST['number'];
                if ($guess < $number){ 
                    echo "Introduce un número más alto.";
                }elseif($guess > $number){       
                    echo "Introduce un número más bajo.";
                }elseif($guess == $number){      
                    echo "<p>¡Correcto!</p>";
                }
            }
        }
        ?>
    </body>
</html>
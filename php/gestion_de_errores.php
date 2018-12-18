<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestor de errores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

    <?php
        $dividendo;
        $divisor = 2;
        set_error_handler("gestorDeErrores");
        $resultado = $dividendo / $divisor;

        restore_error_handler();

        $mensaje = "Fallo al realizar la operación";
        function gestorDeErrores($nivel, $mensaje){
            switch($nivel){
                case E_WARNING:
                echo "Error de tipo WARNING: $mensaje.<br />";
                break;
            default:
                echo "Error de tipo no especificado: $mensaje.<br />";
            }
        }


    ?>

    </body>

</html>

<?php
/*
    function __autoload($nombreclase){
        $nombre = $nombreclase.".php";//ruta donde se encuentra la clase
        require_once($nombre);
    }
    $obj = new claseEjemplo();*/


    function cargar($nombreclase){
        include $nombreclase . ".php";
    }

    spl_autoload_register('cargar');
    $obj = new claseEjemplo();
?>
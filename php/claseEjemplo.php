<?php

    class claseEjemplo {

        public $variable = 'Hola mundo!';

        public function imprimir(){
            echo $this->variable;
        }
    }

    $main = new claseEjemplo();
    $main->imprimir();

?>
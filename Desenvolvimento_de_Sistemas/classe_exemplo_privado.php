<?php
    class ExemploPrivado{
        private $atributo_privado;
        private function metodo_privado(){
            echo "<br />";
            echo "--Acessando no método Privado";
            echo "<br />";
        }
        public function metodo_publico(){
            echo "Eu posso acessar no método privado";
            $this->metodo_privado();
            echo "<br />";
            echo "E também consigo acessar um atributo privado";
            echo $this->atributo_privado;
        }
        public function_construct($ap){
            $this->atributo_privado=$ap;
        }
    }

?>
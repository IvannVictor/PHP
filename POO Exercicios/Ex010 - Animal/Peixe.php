<?php
    require_once 'Animal';
    class Peixe extends Animal{
        private $corEscama;

        function getCorEscama(){
            return $this->corEscama;
        }

        function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }

        function locomover(){
            echo "<p>Nadando</p>";
        }
        function alimentar(){
            echo "<p>Algas</p>";
        }
        function emitirSom(){
            echo "<p>Nao faz som</p>";
        }

        function soltaBolhas(){
            echo "<p>Soltando bolhas</p>"
        }
    }
?>
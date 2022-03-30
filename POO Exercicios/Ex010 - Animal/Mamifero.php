<?php
    require_once 'Animal';
    class Mamifero extends Animal{
        private $corPelo;

        function getCorPelo(){
            return $this->corPelo;
        }

        function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }

        function locomover(){
            echo "<p>Correndo</p>";
        }
        function alimentar(){
            echo "<p>Mamando</p>";
        }
        function emitirSom(){
            echo "<p>Som de mamifero";
        }
    }
?>
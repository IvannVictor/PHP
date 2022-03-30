<?php
    require_once 'Animal';
    class Aves extends Animal{
        private $corPena;

        function getCorPena(){
            return $this->corPena;
        }

        function setCorPena($corPena){
            $this->corPena = $corPena;
        }

        function locomover(){
            echo "<p>Voando</p>";
        }
        function alimentar(){
            echo "<p>Frutos</p>";
        }
        function emitirSom(){
            echo "<p>Som de passaro</p>";
        }

        function fazerNinho(){
            echo "<p>Ninho</p>"
        }
    }
?>